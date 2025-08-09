<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("companies")->insert([
            [
                "name"=> "ARQUARIS, S. DE R.L. DE C.V.",
                "created_at" => now(),
            ],
            [
                "name"=> "Arquitectura Plan A S.A DE C.V.",
                "created_at" => now(),
            ],
            [
                "name"=> "Fabiola González Gaeta",
                "created_at" => now(),
            ],
            [
                "name"=> "Contratista Manuel Reynoso Garduño",
                "created_at" => now(),
            ],
            [
                "name"=> "Contratista Jesús Pacheco Méndez",
                "created_at" => now(),
            ],
            [
                "name"=> "RYE Construcciones e Instalaciones Electromecánicas S.A. de C.V.",
                "created_at" => now(),
            ],
            [
                "name"=> "Sypco S.A DE C.V.",
                "created_at" => now(),
            ],
            [
                "name"=> "Sicasa México S.A de C.V.",
                "created_at" => now(),
            ],
            [
                "name"=> "Hidráulica y Sanitaria J.G., S.A. de C.V.",
                "created_at" => now(),
            ],
            [
                "name"=> "ABC Supervisión de Obra S.A. de C.V.",
                "created_at" => now(),
            ],
            [
                "name"=> "Despacho de Arquitectura LUPA/Jorge Ponce, arq. ",
                "created_at" => now(),
            ],
            [
                "name"=> "Despacho Arq. Jorge Ponce y Asociados",
                "created_at" => now(),
            ],
            [
                "name"=> "Sinter",
                "created_at" => now(),
            ],
            [
                "name"=> "Arq, Alma Berenice González Hernández",
                "created_at" => now(),
            ],
            [
                "name"=> "Independiente",
                "created_at" => now(),
            ],
        ]);
    }
}
