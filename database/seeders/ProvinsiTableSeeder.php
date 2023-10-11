<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvinsiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('provinsi')->delete();

        \DB::table('provinsi')->insert(array (
            0 =>
            array (
                'id' => 11,
                'name' => 'Aceh',
            ),
            1 =>
            array (
                'id' => 12,
                'name' => 'Sumatera Utara',
            ),
            2 =>
            array (
                'id' => 13,
                'name' => 'Sumatera Barat',
            ),
            3 =>
            array (
                'id' => 14,
                'name' => 'Riau',
            ),
            4 =>
            array (
                'id' => 15,
                'name' => 'Jambi',
            ),
            5 =>
            array (
                'id' => 16,
                'name' => 'Sumatera Selatan',
            ),
            6 =>
            array (
                'id' => 17,
                'name' => 'Bengkulu',
            ),
            7 =>
            array (
                'id' => 18,
                'name' => 'Lampung',
            ),
            8 =>
            array (
                'id' => 19,
                'name' => 'Kepulauan Bangka Belitung',
            ),
            9 =>
            array (
                'id' => 21,
                'name' => 'Kepulauan Riau',
            ),
            10 =>
            array (
                'id' => 31,
                'name' => 'DKI Jakarta',
            ),
            11 =>
            array (
                'id' => 32,
                'name' => 'Jawa Barat',
            ),
            12 =>
            array (
                'id' => 33,
                'name' => 'Jawa Tengah',
            ),
            13 =>
            array (
                'id' => 34,
                'name' => 'DI Yogyakarta',
            ),
            14 =>
            array (
                'id' => 35,
                'name' => 'Jawa Timur',
            ),
            15 =>
            array (
                'id' => 36,
                'name' => 'Banten',
            ),
            16 =>
            array (
                'id' => 51,
                'name' => 'Bali',
            ),
            17 =>
            array (
                'id' => 52,
                'name' => 'Nusa Tenggara Barat',
            ),
            18 =>
            array (
                'id' => 53,
                'name' => 'Nusa Tenggara Timur',
            ),
            19 =>
            array (
                'id' => 61,
                'name' => 'Kalimantan Barat',
            ),
            20 =>
            array (
                'id' => 62,
                'name' => 'Kalimantan Tengah',
            ),
            21 =>
            array (
                'id' => 63,
                'name' => 'Kalimantan Selatan',
            ),
            22 =>
            array (
                'id' => 64,
                'name' => 'Kalimantan Timur',
            ),
            23 =>
            array (
                'id' => 65,
                'name' => 'Kalimantan Utara',
            ),
            24 =>
            array (
                'id' => 71,
                'name' => 'Sulawesi Utara',
            ),
            25 =>
            array (
                'id' => 72,
                'name' => 'Sulawesi Tengah',
            ),
            26 =>
            array (
                'id' => 73,
                'name' => 'Sulawesi Selatan',
            ),
            27 =>
            array (
                'id' => 74,
                'name' => 'Sulawesi Tenggara',
            ),
            28 =>
            array (
                'id' => 75,
                'name' => 'Gorontalo',
            ),
            29 =>
            array (
                'id' => 76,
                'name' => 'Sulawesi Barat',
            ),
            30 =>
            array (
                'id' => 81,
                'name' => 'Maluku',
            ),
            31 =>
            array (
                'id' => 82,
                'name' => 'Maluku Utara',
            ),
            32 =>
            array (
                'id' => 91,
                'name' => 'Papua Barat',
            ),
            33 =>
            array (
                'id' => 94,
                'name' => 'Papua',
            ),
        ));


    }
}
