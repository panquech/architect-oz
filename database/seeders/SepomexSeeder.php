<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SepomexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
    {
        $filePath = database_path('infiles/CPdescarga.txt');

        if (!file_exists($filePath)) {
            $this->command->error("El archivo no existe: {$filePath}");
            return;
        }

        $handle = fopen($filePath, 'r');

        if ($handle === false) {
            $this->command->error("No se pudo abrir el archivo.");
            return;
        }

        // Saltamos las dos primeras líneas si no contienen datos
        fgets($handle);
        fgets($handle);

        $batch = [];
        $batchSize = 500; // Insertar en lotes para más velocidad

        while (($line = fgets($handle)) !== false) {
            $line = mb_convert_encoding($line, 'UTF-8', 'ISO-8859-1');

            $columns = explode('|', trim($line));

            if (count($columns) < 10) {
                continue; // línea corrupta o vacía
            }

            $batch[] = [
            'd_codigo'          => trim($columns[0]),
            'd_asenta'          => trim($columns[1]),
            'd_tipo_asenta'     => trim($columns[2]),
            'D_mnpio'           => trim($columns[3]),
            'd_estado'          => trim($columns[4]),
            'd_ciudad'          => trim($columns[5]),
            'd_CP'              => trim($columns[6]),
            'c_estado'          => trim($columns[7]),
            'c_oficina'         => trim($columns[8]),
            'c_CP'              => trim($columns[9]) === '' ? 0 : (int)trim($columns[9]),
            'c_tipo_asenta'     => trim($columns[10]),
            'c_mnpio'           => trim($columns[11]),
            'id_asenta_cpcons'  => trim($columns[12]),
            'd_zona'            => trim($columns[13]),
            'c_cve_ciudad'      => trim($columns[14]),
            ];

            if (count($batch) >= $batchSize) {
                DB::table('sepomex')->insert($batch);
                $batch = [];
            }
        }

        if (!empty($batch)) {
            DB::table('sepomex')->insert($batch);
        }

        fclose($handle);

        $this->command->info("Datos insertados correctamente en SQLite.");
        
        $this->command->info("Starting data population...");
    
        try {
            DB::transaction(function () {
                // Disable foreign key constraints temporarily
                DB::statement('PRAGMA foreign_keys = OFF');
                
                // 1. Clear existing data (optional, but recommended)
                DB::table('sepomex_cp')->delete();
                DB::table('sepomex_municipios')->delete();
                DB::table('sepomex_asentamientos')->delete();
                DB::table('sepomex_estados')->delete();
                
                // 2. Insert Estados
                $this->command->info("Inserting estados...");
                DB::statement('INSERT INTO sepomex_estados 
                            SELECT DISTINCT c_estado, d_estado 
                            FROM sepomex 
                            WHERE c_estado IS NOT NULL AND d_estado IS NOT NULL');
                
                $estadosCount = DB::table('sepomex_estados')->count();
                $this->command->info("Inserted {$estadosCount} estados");
                
                // 3. Insert Asentamientos
                $this->command->info("Inserting asentamientos...");
                DB::statement('INSERT INTO sepomex_asentamientos 
                            SELECT DISTINCT c_tipo_asenta, d_tipo_asenta 
                            FROM sepomex 
                            WHERE c_tipo_asenta IS NOT NULL AND d_tipo_asenta IS NOT NULL');
                
                $asentamientosCount = DB::table('sepomex_asentamientos')->count();
                $this->command->info("Inserted {$asentamientosCount} asentamientos");
                
                // 4. Insert Municipios
                $this->command->info("Inserting municipios...");
                DB::statement('INSERT INTO sepomex_municipios 
                            SELECT DISTINCT c_mnpio, D_mnpio, c_estado 
                            FROM sepomex 
                            WHERE c_mnpio IS NOT NULL 
                            AND D_mnpio IS NOT NULL 
                            AND c_estado IS NOT NULL');
                
                $municipiosCount = DB::table('sepomex_municipios')->count();
                $this->command->info("Inserted {$municipiosCount} municipios");
                
                // 5. Insert CP data
                $this->command->info("Inserting CP data...");
                DB::statement('INSERT INTO sepomex_cp 
                            SELECT DISTINCT d_codigo, id_asenta_cpcons, c_mnpio, c_tipo_asenta, d_asenta, c_estado 
                            FROM sepomex 
                            WHERE d_codigo IS NOT NULL 
                            AND id_asenta_cpcons IS NOT NULL
                            AND c_mnpio IS NOT NULL
                            AND c_tipo_asenta IS NOT NULL
                            AND d_asenta IS NOT NULL
                            AND c_estado IS NOT NULL');
                
                $cpCount = DB::table('sepomex_cp')->count();
                $this->command->info("Inserted {$cpCount} CP records");
                
                // Re-enable foreign key constraints
                DB::statement('PRAGMA foreign_keys = ON');
                
                $this->command->info("Data population completed successfully!");
            });
            
        } catch (\Exception $e) {
            // Re-enable FK constraints even if there's an error
            DB::statement('PRAGMA foreign_keys = ON');
            $this->command->error("Error: " . $e->getMessage());
            $this->showDebugInfo();
        }
    }

    private function showDebugInfo()
    {
        $this->command->info("\n=== DEBUG INFORMATION ===");
        
        // Check sepomex source data
        $sepomexCount = DB::table('sepomex')->count();
        $this->command->info("Total sepomex records: {$sepomexCount}");
        
        if ($sepomexCount == 0) {
            $this->command->error("No data in sepomex table! Run the main seeder first.");
            return;
        }
        
        // Check unique counts in source data
        $uniqueEstados = DB::table('sepomex')
            ->select('c_estado', 'd_estado')
            ->whereNotNull('c_estado')
            ->whereNotNull('d_estado')
            ->distinct()
            ->count();
        
        $uniqueAsentamientos = DB::table('sepomex')
            ->select('c_tipo_asenta', 'd_tipo_asenta')
            ->whereNotNull('c_tipo_asenta')
            ->whereNotNull('d_tipo_asenta')
            ->distinct()
            ->count();
            
        $uniqueMunicipios = DB::table('sepomex')
            ->select('c_mnpio', 'D_mnpio', 'c_estado')
            ->whereNotNull('c_mnpio')
            ->whereNotNull('D_mnpio')
            ->whereNotNull('c_estado')
            ->distinct()
            ->count();
        
        $this->command->info("Unique estados in source: {$uniqueEstados}");
        $this->command->info("Unique asentamientos in source: {$uniqueAsentamientos}");
        $this->command->info("Unique municipios in source: {$uniqueMunicipios}");
        
        // Show sample data
        $sampleData = DB::table('sepomex')
            ->select('c_estado', 'd_estado', 'c_tipo_asenta', 'd_tipo_asenta')
            ->whereNotNull('c_estado')
            ->whereNotNull('d_estado')
            ->take(3)
            ->get();
        
        $this->command->info("\nFirst 3 sample records:");
        foreach ($sampleData as $index => $row) {
            $this->command->info("Row " . ($index + 1) . ": Estado={$row->c_estado} ({$row->d_estado}), TipoAsenta={$row->c_tipo_asenta} ({$row->d_tipo_asenta})");
        }
    }
}
