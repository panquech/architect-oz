<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("services")->insert([
            [
            'name' => 'Proyecto arquitectónico',
            'description' => 'El proyecto arquitectónico va enfocado a la proyección de una idea, plasmada visualmente en planos, perspectivas o volúmenes (maqueta o animación); extraída de las necesidades del cliente y aterrizada en un espacio (terreno o construcción existente)'
            ],
            [
            'name' => 'Construcción',
            'description' => 'A partir de los proyectos damos paso a la ejecución (Construcción), la cual tiende ser desde obra nueva, remodelación, o ampliación todo en base a un proyecto.'
            ],
            [
            'name' => 'Proyecto Ejecutivo',
            'description' => 'Cuando hablamos de un Proyecto Ejecutivo estamos dando ese extra para una mejor visión de inversión en cuanto a capital se refiere para el cliente y asi tenga una visualización global en cuanto tiempos de ejecución, avance de obra y en el capital que debe de invertir.'
            ],
            [
            'name' => 'Obra',
            'description' => 'Una obra no solo es construcción, sino que también intervienen los temas de instalaciones de cualquier índole, también intervenciones en terrenos desde levantamientos, excavaciones, limpieza, etc.'
            ],
            [
            'name' => 'Remodelaciones',
            'description' => 'Cuando la construcción existente no es suficiente para las necesidades o simplemente requerimos un cambio de enfoque, diseño o estético, aquí es donde intervenimos con remodelaciones o ampliaciones en la construcción'
            ],
            [
            'name' => 'Instalaciones Hidrosanitaria, eléctrica, hvac, CCTV, sistemas',
            'description' => 'Un proyecto vive de lo que lo hace funcionar y más sobre aquello que te facilita su habitad, por ello la buena y oportuna intervención del diseño y proyecciones de las instalaciones nunca deben faltar.'
            ],
            [
            'name' => 'Levantamientos',
            'description' => 'Para que un buen proyecto sea sobre posicionado correctamente en un terreno, una construcción existente, etc. La importancia de un buen levantamiento topográfico, fotográfico o simplemente de medidas, nunca debe de faltar para su correcta ejecución.'
            ],
            [
            'name' => 'Limpieza de Terrenos',
            'description' => 'El proceso de la ejecución de un proyecto en el terreno implica muchos factores que nos faciliten la mayor comodidad posible para que esta sea una obra sin retrasos o accidentes.'
            ],
            [
            'name' => 'Excavaciones',
            'description' => 'Los tiempos de ejecución y sobre todo el trabajo lo mas limpio que se pueda conlleva a hacer uso de herramientas o maquinaria que nos permitan agilizar la obra y también en tener una mejor calidad en la propia ejecución.'
            ],
            [
            'name' => 'Trámites',
            'description' => 'Cuando comenzamos a realizar las cosas lo mejor posible es importante que lo sigamos haciendo, por ello se requieren permisos.'
            ],
        ]);
    }
}
