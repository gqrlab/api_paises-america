<?php

namespace Database\Seeders;

use App\Models\Pais;
use Illuminate\Database\Seeder;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Array con información sobre los países:
        $array = [
            /* Antigua y Barbuda */
            'pais_1' => [
                'Antigua y Barbuda',
                'Saint John',
                '92.436',
                'ATG',
            ],

            /* Argentina */
            'pais_2' => [
                'Argentina',
                'Buenos Aires',
                '45.195.777',
                'ARG',
            ],

            /* Bahamas */
            'pais_3' => [
                'Bahamas',
                'Nasáu',
                '392.718',
                'BHS',

            ],

            /* Barbados */
            'pais_4' => [
                'Barbados',
                'Bridgetown',
                '279.912',
                'BRB',
            ],

            /* Belice */
            'pais_5' => [
                'Belice',
                'Belmopán',
                '408.484',
                'BLZ',

            ],

            /* Bolivia */
            'pais_6' => [
                'Bolivia',
                'Sucre',
                '11.633.371',
                'BOL',
            ],

            /* Brasil */
            'pais_7' => [
                'Brasil',
                'Brasilia',
                '212.216.052',
                'BRA',
            ],

            /* Canadá */
            'pais_8' => [
                'Canadá',
                'Ottawa',
                '37.067.011',
                'CAN',
            ],

            /* Chile */
            'pais_9' => [
                'Chile',
                'Santiago de Chile',
                '19.458.310',
                'CHL',
            ],

            /* Colombia */
            'pais_10' => [
                'Colombia',
                'Bogotá',
                '51.049.498',
                'COL',
            ],

            /* Costa Rica */
            'pais_11' => [
                'Costa Rica',
                'San José',
                '5.163.068',
                'CRI',
            ],

            /* Cuba */
            'pais_12' => [
                'Cuba',
                'La Habana',
                '11.193.470',
                'CUB',
            ],

            /* Dominica */
            'pais_13' => [
                'Dominica',
                'Roseau',
                '69.940',
                'DMA',
            ],

            /* Ecuador */
            'pais_14' => [
                'Ecuador',
                'Quito',
                '17.475.570',
                'ECU',
            ],

            /* El Salvador */
            'pais_15' => [
                'El Salvador',
                'San Salvador',
                '6.704.121',
                'SLV',
            ],

            /* Estados Unidos */
            'pais_16' => [
                'Estados Unidos',
                'Washington D. C.',
                '325.719.178',
                'USA',
            ],

            /* Granada */
            'pais_17' => [
                'Granada',
                'Saint George\'s',
                '109.590',
                'GRD',
            ],

            /* Guatemala */
            'pais_18' => [
                'Guatemala',
                'Ciudad de Guatemala',
                '17.263.239',
                'GTM',
            ],

            /* Guyana */
            'pais_19' => [
                'Guyana',
                'Georgetown',
                '786.391',
                'GUY',
            ],

            /* Haití */
            'pais_20' => [
                'Haití',
                'Puerto Príncipe',
                '11 325 861',
                'HTI',
            ],

            /* Honduras */
            'pais_21' => [
                'Honduras',
                'Tegucigalpa',
                '9.402.602',
                'HND',
            ],

            /* Jamaica */
            'pais_22' => [
                'Jamaica',
                'Kingston',
                '2.726.667',
                'JAM',
            ],

            /* México */
            'pais_23' => [
                'México',
                'Ciudad De México',
                '128.649.565',
                'MX',
            ],

            /* Nicaragua */
            'pais_24' => [
                'Nicaragua',
                'Managua',
                '6.527.691',
                'NIC',
            ],

            /* Panamá */
            'pais_25' => [
                'Panamá',
                'Ciudad de Panamá',
                '4.170.607',
                'PAN',
            ],

            /* Paraguay */
            'pais_26' => [
                'Paraguay',
                'Asunción',
                '7.353.672',
                'PRY',
            ],

            /* Perú */
            'pais_27' => [
                'Perú',
                'Lima',
                '33.149.016',
                'PER',
            ],

            /* República Dominicana */
            'pais_28' => [
                'República Dominicana',
                'Santo Domingo de Guzmán',
                '11.229.403',
                'DOM',
            ],

            /* San Cristóbal y Nieves */
            'pais_29' => [
                'San Cristóbal y Nieves',
                'Basseterre',
                '54.961',
                'KNA',
            ],

            /* San Vicente y las Granadinas */
            'pais_30' => [
                'San Vicente y las Granadinas',
                'Kingstown',
                '109.643',
                'VCT',
            ],

            /* Santa Lucía */
            'pais_31' => [
                'Santa Lucía',
                'Castries',
                '178.015',
                'LCA',
            ],

            /* Surinam */
            'pais_32' => [
                'Surinam',
                'Paramaribo',
                '558.368',
                'SUR',
            ],

            /* Trinidad y Tobago */
            'pais_33' => [
                'Trinidad y Tobago',
                'Puerto España',
                '1.363.985',
                'TTO',
            ],

            /* Uruguay */
            'pais_34' => [
                'Uruguay',
                'Montevideo',
                '3.505.985',
                'URY',
            ],

            /* Venezuela */
            'pais_35' => [
                'Venezuela',
                'Caracas',
                '32.606.000',
                'VEN',
            ],
        ];

        //Cantidade de países:
        $cantidad_paises = count($array);

        //Ingresar países e información a la Base de datos:
        for ($i = 1; $i <= $cantidad_paises; $i++) {
            $numero_pais = $i;

            $numero_pais             = new Pais();
            $numero_pais->nombre     = $array['pais_' . $i][0];
            $numero_pais->capital    = $array['pais_' . $i][1];
            $numero_pais->poblacion  = $array['pais_' . $i][2];
            $numero_pais->codigo_iso = $array['pais_' . $i][3];
            $numero_pais->save();
        }
    }
}
