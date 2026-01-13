<?php
namespace Database\Seeders;

use App\Models\OrdenInsecto;
use Illuminate\Database\Seeder;

class OrdenesInsectosSeeder extends Seeder
{
    public function run()
    {
        $ordenes = [
            [
                'nombre' => 'Orthoptera',
                'slug' => 'orthoptera',
                'nombre_cientifico' => 'Orthoptera',
                'descripcion_general' => 'Los ortópteros incluyen saltamontes, grillos y cucarachas. Son insectos terrestres con patas traseras adaptadas para el salto.',
                'caracteristicas_principales' => 'Metamorfosis incompleta, patas traseras alargadas para saltar, aparato bucal masticador.',
                'imagen_representativa' => 'image/langosta.jpg',
                'tipo_metamorfosis' => 'Hemimetabola',
                'orden_display' => 1
            ],
            [
                'nombre' => 'Hemiptera',
                'slug' => 'hemiptera',
                'nombre_cientifico' => 'Hemiptera',
                'descripcion_general' => 'Los hemípteros incluyen chinches, pulgones y cigarras. Muchos son plagas agrícolas.',
                'caracteristicas_principales' => 'Aparato bucal picador-chupador, alas anteriores parcialmente endurecidas.',
                'imagen_representativa' => 'image/heteropetra.jpg',
                'tipo_metamorfosis' => 'Hemimetabola',
                'orden_display' => 2
            ],
            [
                'nombre' => 'Hymenoptera',
                'slug' => 'hymenoptera',
                'nombre_cientifico' => 'Hymenoptera',
                'descripcion_general' => 'Los himenópteros incluyen abejas, avispas y hormigas. Muchos son sociales y polinizadores importantes.',
                'caracteristicas_principales' => 'Metamorfosis completa, aparato bucal masticador o lamedor, en muchos casos con aguijón.',
                'imagen_representativa' => 'image/avispa.png',
                'tipo_metamorfosis' => 'Holometabola',
                'orden_display' => 3
            ],
            [
                'nombre' => 'Coleoptera',
                'slug' => 'coleoptera',
                'nombre_cientifico' => 'Coleoptera',
                'descripcion_general' => 'Los coleópteros son los escarabajos, el orden más diverso de insectos.',
                'caracteristicas_principales' => 'Élitros que cubren las alas membranosas, aparato bucal masticador.',
                'imagen_representativa' => 'image/coleoptera.jpg',
                'tipo_metamorfosis' => 'Holometabola',
                'orden_display' => 4
            ],
            [
                'nombre' => 'Lepidoptera',
                'slug' => 'lepidoptera',
                'nombre_cientifico' => 'Lepidoptera',
                'descripcion_general' => 'Los lepidópteros incluyen mariposas y polillas, conocidos por sus alas escamosas.',
                'caracteristicas_principales' => 'Metamorfosis completa, aparato bucal en espiritrompa, alas cubiertas de escamas.',
                'imagen_representativa' => 'image/lepidoctera.jpg',
                'tipo_metamorfosis' => 'Holometabola',
                'orden_display' => 5
            ],
            [
                'nombre' => 'Diptera',
                'slug' => 'diptera',
                'nombre_cientifico' => 'Diptera',
                'descripcion_general' => 'Los dípteros incluyen moscas y mosquitos, con solo un par de alas funcionales.',
                'caracteristicas_principales' => 'Un par de alas, segundo par reducido a halterios, aparato bucal chupador o picador.',
                'imagen_representativa' => 'image/diptera.jpg',
                'tipo_metamorfosis' => 'Holometabola',
                'orden_display' => 6
            ]
        ];
        
        foreach ($ordenes as $orden) {
            OrdenInsecto::create($orden);
        }
    }
}