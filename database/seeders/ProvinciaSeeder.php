<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('provincias')->insert([

            [
                'nombre_provincia' => 'Azuay',
                'capital_provincia' => 'Cuenca',
                'descripcion_provincia' => 'Es llamada la Atenas del Ecuador por su arquitectura, su diversidad cultural, su aporte a las artes, ciencias y letras ecuatorianas y por ser el lugar de nacimiento de muchos personajes ilustres de la sociedad ecuatoriana',
                'poblacion_provincia' => '569.42',
                'superficie_provincia' => '122.00',
                'latitud_provincia' => '-2.902222',
                'longitud_provincia' => '-79.005261',
                'id_region' => '1'
            ],
            [
                'nombre_provincia' => 'Bolivar',
                'capital_provincia' => 'Guaranda',
                'descripcion_provincia' => 'Bolívar es una provincia del centro de Ecuador, en la cordillera occidental de los Andes. Su capital es la ciudad de Guaranda. La Provincia de Bolívar se llama así en honor al Libertador Simón Bolívar.',
                'poblacion_provincia' => '183 641',
                'superficie_provincia' => '3254.00',
                'latitud_provincia' => '-1.6',
                'longitud_provincia' => '-79',
                'id_region' => '1'
            ],
            [
                'nombre_provincia' => 'Cañar',
                'capital_provincia' => 'Azoguez',
                'descripcion_provincia' => 'La provincia destaca como uno de los sitios turísticos más importantes del país, destacándose entre otros la Fortaleza de Ingapirca, la Laguna de Culebrillas y la ciudad de Azogues.',
                'poblacion_provincia' => '33848.00',
                'superficie_provincia' => '3908.00',
                'latitud_provincia' => '-2.733333',
                'longitud_provincia' => '-78.833333',
                'id_region' => '1'
            ],
            [
                'nombre_provincia' => 'Carchi',
                'capital_provincia' => 'Tulcán',
                'descripcion_provincia' => 'Carchi es una provincia ecuatoriana situada al norte del Ecuador en la frontera con Colombia. Su capital es la ciudad de Tulcán. Forma parte de la región 1',
                'poblacion_provincia' => '82734.00',
                'superficie_provincia' => '3783.00',
                'latitud_provincia' => '0.811667',
                'longitud_provincia' => '-77.718611',
                'id_region' => '1'
            ],
            [
                'nombre_provincia' => 'Chimborazo',
                'capital_provincia' => 'Riobamba',
                'descripcion_provincia' => 'En esta provincia se encuentran varias de las cumbres más elevadas del país, como el Carihuairazo, el Altar, Igualata, Sangay, entre otros, que en algunos casos comparte con otras provincias.',
                'poblacion_provincia' => '223586.00',
                'superficie_provincia' => '6487.00',
                'latitud_provincia' => '-1.666667',
                'longitud_provincia' => '-78.65',
                'id_region' => '1'
            ],
            [
                'nombre_provincia' => 'Cotopaxi',
                'capital_provincia' => 'Latacunga',
                'descripcion_provincia' => 'La provincia toma el nombre del volcán más grande e importante de su territorio, el volcán Cotopaxi. Cotopaxi se encuentra dividida políticamente en 7 cantones. Según el último ordenamiento territorial, la provincia de Cotopaxi pertenece a la región centro',
                'poblacion_provincia' => '409 205',
                'superficie_provincia' => '6569.00',
                'latitud_provincia' => '-0.933333',
                'longitud_provincia' => '-78.616667',
                'id_region' => '1'
            ],
            [
                'nombre_provincia' => 'El Oro',
                'capital_provincia' => 'Machala',
                'descripcion_provincia' => 'La capital de la provincia de El Oro es la ciudad de Machala, quinta ciudad del país, considerada como la capital bananera del mundo.',
                'poblacion_provincia' => '260528.00',
                'superficie_provincia' => '6188.00',
                'latitud_provincia' => '-3.266669',
                'longitud_provincia' => '-79.9667',
                'id_region' => '2'
            ],
            [
                'nombre_provincia' => 'Esmeraldas',
                'capital_provincia' => 'Esmeraldas',
                'descripcion_provincia' => 'Provincia del Ecuador situada en su costa noroccidental, conocida popularmente como la provincia verde. Sucapital homónima es uno de los puertos principales del Ecuador y terminal del oleoducto transandino. Posee un aeropuerto para vuelos nacionales e internacionales',
                'poblacion_provincia' => '189504.00',
                'superficie_provincia' => '15 954',
                'latitud_provincia' => '-0.966667',
                'longitud_provincia' => '-79.65',
                'id_region' => '2'
            ],
            [
                'nombre_provincia' => 'Galápagos',
                'capital_provincia' => 'P. Baquerizo Moreno',
                'descripcion_provincia' => 'Es el mayor centro turístico del Ecuador, así como también una de las reservas ecológicas más grandes e importantes del planeta. Con sus 26.640 habitantes, Galápagos es la provincia menos poblada del país, debido principalmente al afán de conservar al máximo la flora y fauna de la región.',
                'poblacion_provincia' => '5600.00',
                'superficie_provincia' => '8010.00',
                'latitud_provincia' => '-0.666667',
                'longitud_provincia' => '-90.55',
                'id_region' => '3'
            ],
            [
                'nombre_provincia' => 'Guayas',
                'capital_provincia' => 'Guayaquil',
                'descripcion_provincia' => 'Es el mayor centro comercial e industrial del Ecuador. Con sus 3,8 millones de habitantes, Guayas es la provincia más poblada del país, constituyéndose con el 24,5% de la población de la República.',
                'poblacion_provincia' => '2526927.00',
                'superficie_provincia' => '17139.00',
                'latitud_provincia' => '-2.2',
                'longitud_provincia' => '-79.9667',
                'id_region' => '2'
            ],
            [
                'nombre_provincia' => 'Imbabura',
                'capital_provincia' => 'Ibarra',
                'descripcion_provincia' => 'La provincia también es conocida por sus contrastes poblacionales es así que la población está marcada por diferentes factores demográficos, además desde siempre ha sido núcleo de artesanías y cultura.',
                'poblacion_provincia' => '181722.00',
                'superficie_provincia' => '4599.00',
                'latitud_provincia' => '0.35',
                'longitud_provincia' => '-78.133333',
                'id_region' => '1'
            ],
            [
                'nombre_provincia' => 'Loja',
                'capital_provincia' => 'Loja',
                'descripcion_provincia' => 'Loja es una ciudad del Ecuador, capital de la provincia y cantón Loja, tiene una rica tradición en las artes, y por esta razón es conocida como la capital musical y cultural del Ecuador.',
                'poblacion_provincia' => '206.83',
                'superficie_provincia' => '57.00',
                'latitud_provincia' => '-3.833',
                'longitud_provincia' => '-80.067',
                'id_region' => '1'
            ],
            [
                'nombre_provincia' => 'Los Rios',
                'capital_provincia' => 'Babahoyo',
                'descripcion_provincia' => 'Los Ríos, oficialmente Provincia de Los Ríos, es una de las 24 provincias de la República del Ecuador, localizada en la Región Costa del país. Su capital es la ciudad de Babahoyo y su localidad más poblada es la ciudad de Quevedo. Es uno de los más importantes centros agrícolas del Ecuador. Su territorio está ubicado en la parte central del litoral del país y limita con las provincias de Guayas, Santo Domingo de los Tsáchilas, Manabí, Cotopaxi y Bolívar. Según el último ordenamiento territorial, la provincia de Los Ríos pertenece a la región comprendida también por las provincias de Guayas, Los Ríos, y parte de la provincia de Bolívar.',
                'poblacion_provincia' => '600.00',
                'superficie_provincia' => '15643.00',
                'latitud_provincia' => '-1.2',
                'longitud_provincia' => '-79.5',
                'id_region' => '2'
            ],
            [
                'nombre_provincia' => 'Manabi',
                'capital_provincia' => 'Portoviejo',
                'descripcion_provincia' => 'Manabí es una provincia ecuatoriana situada en la región Costa. Su capital es la ciudad de Portoviejo. Es una de las provincias más extensas del Ecuador y cuenta con una rica tradición cultural y un importante desarrollo agrícola y comercial.',
                'poblacion_provincia' => '126 042',
                'superficie_provincia' => '18220.00',
                'latitud_provincia' => '-0.95',
                'longitud_provincia' => '-80.4',
                'id_region' => '2'
            ],
            [
                'nombre_provincia' => 'Morona Santiago',
                'capital_provincia' => 'Macas',
                'descripcion_provincia' => 'La provincia de Morona Santiago está ubicada en la región amazónica del Ecuador. Su capital es Macas. Es conocida por su diversidad étnica y cultural, y por sus extensas áreas de selva.',
                'poblacion_provincia' => '162 117',
                'superficie_provincia' => '49 801.00',
                'latitud_provincia' => '-2.06',
                'longitud_provincia' => '-78.14',
                'id_region' => '4'
            ],
            [
                'nombre_provincia' => 'Napo',
                'capital_provincia' => 'Tena',
                'descripcion_provincia' => 'Napo es una provincia ecuatoriana situada en la región amazónica del país. Su capital es Tena. La provincia se caracteriza por su riqueza natural y diversidad de ecosistemas.',
                'poblacion_provincia' => '93 083',
                'superficie_provincia' => '12 417.00',
                'latitud_provincia' => '-0.98',
                'longitud_provincia' => '-77.84',
                'id_region' => '4'
            ],
            [
                'nombre_provincia' => 'Orellana',
                'capital_provincia' => 'Francisco de Orellana',
                'descripcion_provincia' => 'La provincia de Orellana es una provincia ecuatoriana localizada en la región amazónica del país. Su capital es Francisco de Orellana, conocida también como Coca. La provincia es importante por su biodiversidad y recursos naturales.',
                'poblacion_provincia' => '102 254',
                'superficie_provincia' => '31 300.00',
                'latitud_provincia' => '-0.73',
                'longitud_provincia' => '-76.98',
                'id_region' => '4'
            ],
            [
                'nombre_provincia' => 'Pastaza',
                'capital_provincia' => 'Puyo',
                'descripcion_provincia' => 'Pastaza es una provincia ubicada en la región amazónica del Ecuador. Su capital es Puyo. Es conocida por su biodiversidad, así como por ser una de las principales zonas productoras de productos agrícolas de la región.',
                'poblacion_provincia' => '108 000',
                'superficie_provincia' => '27 820.00',
                'latitud_provincia' => '-1.5',
                'longitud_provincia' => '-77.02',
                'id_region' => '4'
            ],
            [
                'nombre_provincia' => 'Sucumbios',
                'capital_provincia' => 'Nueva Loja',
                'descripcion_provincia' => 'Sucumbíos es una provincia ecuatoriana ubicada en la región amazónica. Su capital es Nueva Loja. La provincia es conocida por su gran diversidad ecológica y su riqueza en recursos naturales.',
                'poblacion_provincia' => '74 759',
                'superficie_provincia' => '19 400.00',
                'latitud_provincia' => '0.08',
                'longitud_provincia' => '-77.92',
                'id_region' => '4'
            ],
            [
                'nombre_provincia' => 'Zamora-Chinchipe',
                'capital_provincia' => 'Zamora',
                'descripcion_provincia' => 'Zamora-Chinchipe es una provincia de la región amazónica del Ecuador. Su capital es Zamora. La provincia es rica en recursos naturales y biodiversidad, y su economía se basa en la agricultura y la explotación de recursos.',
                'poblacion_provincia' => '84 800',
                'superficie_provincia' => '15 427.00',
                'latitud_provincia' => '-4.03',
                'longitud_provincia' => '-78.98',
                'id_region' => '4'
            ]

        ]);
    }
}
