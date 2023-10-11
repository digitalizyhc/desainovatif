<?php

namespace Database\Seeders;

use App\Models\Kabupaten;
use Illuminate\Database\Seeder;

class KabupatenTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('kabupaten')->delete();

        \DB::table('kabupaten')->insert(array (
            0 =>
            array (
                'id' => 1101,
                'name' => 'Kab. Simeulue',
                'provinsi_id' => 11,
            ),
            1 =>
            array (
                'id' => 1102,
                'name' => 'Kab. Aceh Singkil',
                'provinsi_id' => 11,
            ),
            2 =>
            array (
                'id' => 1103,
                'name' => 'Kab. Aceh Selatan',
                'provinsi_id' => 11,
            ),
            3 =>
            array (
                'id' => 1104,
                'name' => 'Kab. Aceh Tenggara',
                'provinsi_id' => 11,
            ),
            4 =>
            array (
                'id' => 1105,
                'name' => 'Kab. Aceh Timur',
                'provinsi_id' => 11,
            ),
            5 =>
            array (
                'id' => 1106,
                'name' => 'Kab. Aceh Tengah',
                'provinsi_id' => 11,
            ),
            6 =>
            array (
                'id' => 1107,
                'name' => 'Kab. Aceh Barat',
                'provinsi_id' => 11,
            ),
            7 =>
            array (
                'id' => 1108,
                'name' => 'Kab. Aceh Besar',
                'provinsi_id' => 11,
            ),
            8 =>
            array (
                'id' => 1109,
                'name' => 'Kab. Pidie',
                'provinsi_id' => 11,
            ),
            9 =>
            array (
                'id' => 1110,
                'name' => 'Kab. Bireuen',
                'provinsi_id' => 11,
            ),
            10 =>
            array (
                'id' => 1111,
                'name' => 'Kab. Aceh Utara',
                'provinsi_id' => 11,
            ),
            11 =>
            array (
                'id' => 1112,
                'name' => 'Kab. Aceh Barat Daya',
                'provinsi_id' => 11,
            ),
            12 =>
            array (
                'id' => 1113,
                'name' => 'Kab. Gayo Lues',
                'provinsi_id' => 11,
            ),
            13 =>
            array (
                'id' => 1114,
                'name' => 'Kab. Aceh Tamiang',
                'provinsi_id' => 11,
            ),
            14 =>
            array (
                'id' => 1115,
                'name' => 'Kab. Nagan Raya',
                'provinsi_id' => 11,
            ),
            15 =>
            array (
                'id' => 1116,
                'name' => 'Kab. Aceh Jaya',
                'provinsi_id' => 11,
            ),
            16 =>
            array (
                'id' => 1117,
                'name' => 'Kab. Bener Meriah',
                'provinsi_id' => 11,
            ),
            17 =>
            array (
                'id' => 1118,
                'name' => 'Kab. Pidie Jaya',
                'provinsi_id' => 11,
            ),
            18 =>
            array (
                'id' => 1171,
                'name' => 'Kota Banda Aceh',
                'provinsi_id' => 11,
            ),
            19 =>
            array (
                'id' => 1172,
                'name' => 'Kota Sabang',
                'provinsi_id' => 11,
            ),
            20 =>
            array (
                'id' => 1173,
                'name' => 'Kota Langsa',
                'provinsi_id' => 11,
            ),
            21 =>
            array (
                'id' => 1174,
                'name' => 'Kota Lhokseumawe',
                'provinsi_id' => 11,
            ),
            22 =>
            array (
                'id' => 1175,
                'name' => 'Kota Subulussalam',
                'provinsi_id' => 11,
            ),
            23 =>
            array (
                'id' => 1201,
                'name' => 'Kab. Nias',
                'provinsi_id' => 12,
            ),
            24 =>
            array (
                'id' => 1202,
                'name' => 'Kab. Mandailing Natal',
                'provinsi_id' => 12,
            ),
            25 =>
            array (
                'id' => 1203,
                'name' => 'Kab. Tapanuli Selatan',
                'provinsi_id' => 12,
            ),
            26 =>
            array (
                'id' => 1204,
                'name' => 'Kab. Tapanuli Tengah',
                'provinsi_id' => 12,
            ),
            27 =>
            array (
                'id' => 1205,
                'name' => 'Kab. Tapanuli Utara',
                'provinsi_id' => 12,
            ),
            28 =>
            array (
                'id' => 1206,
                'name' => 'Kab. Toba Samosir',
                'provinsi_id' => 12,
            ),
            29 =>
            array (
                'id' => 1207,
                'name' => 'Kab. Labuhan Batu',
                'provinsi_id' => 12,
            ),
            30 =>
            array (
                'id' => 1208,
                'name' => 'Kab. Asahan',
                'provinsi_id' => 12,
            ),
            31 =>
            array (
                'id' => 1209,
                'name' => 'Kab. Simalungun',
                'provinsi_id' => 12,
            ),
            32 =>
            array (
                'id' => 1210,
                'name' => 'Kab. Dairi',
                'provinsi_id' => 12,
            ),
            33 =>
            array (
                'id' => 1211,
                'name' => 'Kab. Karo',
                'provinsi_id' => 12,
            ),
            34 =>
            array (
                'id' => 1212,
                'name' => 'Kab. Deli Serdang',
                'provinsi_id' => 12,
            ),
            35 =>
            array (
                'id' => 1213,
                'name' => 'Kab. Langkat',
                'provinsi_id' => 12,
            ),
            36 =>
            array (
                'id' => 1214,
                'name' => 'Kab. Nias Selatan',
                'provinsi_id' => 12,
            ),
            37 =>
            array (
                'id' => 1215,
                'name' => 'Kab. Humbang Hasundutan',
                'provinsi_id' => 12,
            ),
            38 =>
            array (
                'id' => 1216,
                'name' => 'Kab. Pakpak Bharat',
                'provinsi_id' => 12,
            ),
            39 =>
            array (
                'id' => 1217,
                'name' => 'Kab. Samosir',
                'provinsi_id' => 12,
            ),
            40 =>
            array (
                'id' => 1218,
                'name' => 'Kab. Serdang Bedagai',
                'provinsi_id' => 12,
            ),
            41 =>
            array (
                'id' => 1219,
                'name' => 'Kab. Batu Bara',
                'provinsi_id' => 12,
            ),
            42 =>
            array (
                'id' => 1220,
                'name' => 'Kab. Padang Lawas Utara',
                'provinsi_id' => 12,
            ),
            43 =>
            array (
                'id' => 1221,
                'name' => 'Kab. Padang Lawas',
                'provinsi_id' => 12,
            ),
            44 =>
            array (
                'id' => 1222,
                'name' => 'Kab. Labuhan Batu Selatan',
                'provinsi_id' => 12,
            ),
            45 =>
            array (
                'id' => 1223,
                'name' => 'Kab. Labuhan Batu Utara',
                'provinsi_id' => 12,
            ),
            46 =>
            array (
                'id' => 1224,
                'name' => 'Kab. Nias Utara',
                'provinsi_id' => 12,
            ),
            47 =>
            array (
                'id' => 1225,
                'name' => 'Kab. Nias Barat',
                'provinsi_id' => 12,
            ),
            48 =>
            array (
                'id' => 1271,
                'name' => 'Kota Sibolga',
                'provinsi_id' => 12,
            ),
            49 =>
            array (
                'id' => 1272,
                'name' => 'Kota Tanjung Balai',
                'provinsi_id' => 12,
            ),
            50 =>
            array (
                'id' => 1273,
                'name' => 'Kota Pematang Siantar',
                'provinsi_id' => 12,
            ),
            51 =>
            array (
                'id' => 1274,
                'name' => 'Kota Tebing Tinggi',
                'provinsi_id' => 12,
            ),
            52 =>
            array (
                'id' => 1275,
                'name' => 'Kota Medan',
                'provinsi_id' => 12,
            ),
            53 =>
            array (
                'id' => 1276,
                'name' => 'Kota Binjai',
                'provinsi_id' => 12,
            ),
            54 =>
            array (
                'id' => 1277,
                'name' => 'Kota Padangsidimpuan',
                'provinsi_id' => 12,
            ),
            55 =>
            array (
                'id' => 1278,
                'name' => 'Kota Gunungsitoli',
                'provinsi_id' => 12,
            ),
            56 =>
            array (
                'id' => 1301,
                'name' => 'Kab. Kepulauan Mentawai',
                'provinsi_id' => 13,
            ),
            57 =>
            array (
                'id' => 1302,
                'name' => 'Kab. Pesisir Selatan',
                'provinsi_id' => 13,
            ),
            58 =>
            array (
                'id' => 1303,
                'name' => 'Kab. Solok',
                'provinsi_id' => 13,
            ),
            59 =>
            array (
                'id' => 1304,
                'name' => 'Kab. Sijunjung',
                'provinsi_id' => 13,
            ),
            60 =>
            array (
                'id' => 1305,
                'name' => 'Kab. Tanah Datar',
                'provinsi_id' => 13,
            ),
            61 =>
            array (
                'id' => 1306,
                'name' => 'Kab. Padang Pariaman',
                'provinsi_id' => 13,
            ),
            62 =>
            array (
                'id' => 1307,
                'name' => 'Kab. Agam',
                'provinsi_id' => 13,
            ),
            63 =>
            array (
                'id' => 1308,
                'name' => 'Kab. Lima Puluh Kota',
                'provinsi_id' => 13,
            ),
            64 =>
            array (
                'id' => 1309,
                'name' => 'Kab. Pasaman',
                'provinsi_id' => 13,
            ),
            65 =>
            array (
                'id' => 1310,
                'name' => 'Kab. Solok Selatan',
                'provinsi_id' => 13,
            ),
            66 =>
            array (
                'id' => 1311,
                'name' => 'Kab. Dharmasraya',
                'provinsi_id' => 13,
            ),
            67 =>
            array (
                'id' => 1312,
                'name' => 'Kab. Pasaman Barat',
                'provinsi_id' => 13,
            ),
            68 =>
            array (
                'id' => 1371,
                'name' => 'Kota Padang',
                'provinsi_id' => 13,
            ),
            69 =>
            array (
                'id' => 1372,
                'name' => 'Kota Solok',
                'provinsi_id' => 13,
            ),
            70 =>
            array (
                'id' => 1373,
                'name' => 'Kota Sawah Lunto',
                'provinsi_id' => 13,
            ),
            71 =>
            array (
                'id' => 1374,
                'name' => 'Kota Padang Panjang',
                'provinsi_id' => 13,
            ),
            72 =>
            array (
                'id' => 1375,
                'name' => 'Kota Bukittinggi',
                'provinsi_id' => 13,
            ),
            73 =>
            array (
                'id' => 1376,
                'name' => 'Kota Payakumbuh',
                'provinsi_id' => 13,
            ),
            74 =>
            array (
                'id' => 1377,
                'name' => 'Kota Pariaman',
                'provinsi_id' => 13,
            ),
            75 =>
            array (
                'id' => 1401,
                'name' => 'Kab. Kuantan Singingi',
                'provinsi_id' => 14,
            ),
            76 =>
            array (
                'id' => 1402,
                'name' => 'Kab. Indragiri Hulu',
                'provinsi_id' => 14,
            ),
            77 =>
            array (
                'id' => 1403,
                'name' => 'Kab. Indragiri Hilir',
                'provinsi_id' => 14,
            ),
            78 =>
            array (
                'id' => 1404,
                'name' => 'Kab. Pelalawan',
                'provinsi_id' => 14,
            ),
            79 =>
            array (
                'id' => 1405,
                'name' => 'Kab. S I A K',
                'provinsi_id' => 14,
            ),
            80 =>
            array (
                'id' => 1406,
                'name' => 'Kab. Kampar',
                'provinsi_id' => 14,
            ),
            81 =>
            array (
                'id' => 1407,
                'name' => 'Kab. Rokan Hulu',
                'provinsi_id' => 14,
            ),
            82 =>
            array (
                'id' => 1408,
                'name' => 'Kab. Bengkalis',
                'provinsi_id' => 14,
            ),
            83 =>
            array (
                'id' => 1409,
                'name' => 'Kab. Rokan Hilir',
                'provinsi_id' => 14,
            ),
            84 =>
            array (
                'id' => 1410,
                'name' => 'Kab. Kepulauan Meranti',
                'provinsi_id' => 14,
            ),
            85 =>
            array (
                'id' => 1471,
                'name' => 'Kota Pekanbaru',
                'provinsi_id' => 14,
            ),
            86 =>
            array (
                'id' => 1473,
                'name' => 'Kota D U M A I',
                'provinsi_id' => 14,
            ),
            87 =>
            array (
                'id' => 1501,
                'name' => 'Kab. Kerinci',
                'provinsi_id' => 15,
            ),
            88 =>
            array (
                'id' => 1502,
                'name' => 'Kab. Merangin',
                'provinsi_id' => 15,
            ),
            89 =>
            array (
                'id' => 1503,
                'name' => 'Kab. Sarolangun',
                'provinsi_id' => 15,
            ),
            90 =>
            array (
                'id' => 1504,
                'name' => 'Kab. Batang Hari',
                'provinsi_id' => 15,
            ),
            91 =>
            array (
                'id' => 1505,
                'name' => 'Kab. Muaro Jambi',
                'provinsi_id' => 15,
            ),
            92 =>
            array (
                'id' => 1506,
                'name' => 'Kab. Tanjung Jabung Timur',
                'provinsi_id' => 15,
            ),
            93 =>
            array (
                'id' => 1507,
                'name' => 'Kab. Tanjung Jabung Barat',
                'provinsi_id' => 15,
            ),
            94 =>
            array (
                'id' => 1508,
                'name' => 'Kab. Tebo',
                'provinsi_id' => 15,
            ),
            95 =>
            array (
                'id' => 1509,
                'name' => 'Kab. Bungo',
                'provinsi_id' => 15,
            ),
            96 =>
            array (
                'id' => 1571,
                'name' => 'Kota Jambi',
                'provinsi_id' => 15,
            ),
            97 =>
            array (
                'id' => 1572,
                'name' => 'Kota Sungai Penuh',
                'provinsi_id' => 15,
            ),
            98 =>
            array (
                'id' => 1601,
                'name' => 'Kab. Ogan Komering Ulu',
                'provinsi_id' => 16,
            ),
            99 =>
            array (
                'id' => 1602,
                'name' => 'Kab. Ogan Komering Ilir',
                'provinsi_id' => 16,
            ),
            100 =>
            array (
                'id' => 1603,
                'name' => 'Kab. Muara Enim',
                'provinsi_id' => 16,
            ),
            101 =>
            array (
                'id' => 1604,
                'name' => 'Kab. Lahat',
                'provinsi_id' => 16,
            ),
            102 =>
            array (
                'id' => 1605,
                'name' => 'Kab. Musi Rawas',
                'provinsi_id' => 16,
            ),
            103 =>
            array (
                'id' => 1606,
                'name' => 'Kab. Musi Banyuasin',
                'provinsi_id' => 16,
            ),
            104 =>
            array (
                'id' => 1607,
                'name' => 'Kab. Banyu Asin',
                'provinsi_id' => 16,
            ),
            105 =>
            array (
                'id' => 1608,
                'name' => 'Kab. Ogan Komering Ulu Selatan',
                'provinsi_id' => 16,
            ),
            106 =>
            array (
                'id' => 1609,
                'name' => 'Kab. Ogan Komering Ulu Timur',
                'provinsi_id' => 16,
            ),
            107 =>
            array (
                'id' => 1610,
                'name' => 'Kab. Ogan Ilir',
                'provinsi_id' => 16,
            ),
            108 =>
            array (
                'id' => 1611,
                'name' => 'Kab. Empat Lawang',
                'provinsi_id' => 16,
            ),
            109 =>
            array (
                'id' => 1671,
                'name' => 'Kota Palembang',
                'provinsi_id' => 16,
            ),
            110 =>
            array (
                'id' => 1672,
                'name' => 'Kota Prabumulih',
                'provinsi_id' => 16,
            ),
            111 =>
            array (
                'id' => 1673,
                'name' => 'Kota Pagar Alam',
                'provinsi_id' => 16,
            ),
            112 =>
            array (
                'id' => 1674,
                'name' => 'Kota Lubuklinggau',
                'provinsi_id' => 16,
            ),
            113 =>
            array (
                'id' => 1701,
                'name' => 'Kab. Bengkulu Selatan',
                'provinsi_id' => 17,
            ),
            114 =>
            array (
                'id' => 1702,
                'name' => 'Kab. Rejang Lebong',
                'provinsi_id' => 17,
            ),
            115 =>
            array (
                'id' => 1703,
                'name' => 'Kab. Bengkulu Utara',
                'provinsi_id' => 17,
            ),
            116 =>
            array (
                'id' => 1704,
                'name' => 'Kab. Kaur',
                'provinsi_id' => 17,
            ),
            117 =>
            array (
                'id' => 1705,
                'name' => 'Kab. Seluma',
                'provinsi_id' => 17,
            ),
            118 =>
            array (
                'id' => 1706,
                'name' => 'Kab. Mukomuko',
                'provinsi_id' => 17,
            ),
            119 =>
            array (
                'id' => 1707,
                'name' => 'Kab. Lebong',
                'provinsi_id' => 17,
            ),
            120 =>
            array (
                'id' => 1708,
                'name' => 'Kab. Kepahiang',
                'provinsi_id' => 17,
            ),
            121 =>
            array (
                'id' => 1709,
                'name' => 'Kab. Bengkulu Tengah',
                'provinsi_id' => 17,
            ),
            122 =>
            array (
                'id' => 1771,
                'name' => 'Kota Bengkulu',
                'provinsi_id' => 17,
            ),
            123 =>
            array (
                'id' => 1801,
                'name' => 'Kab. Lampung Barat',
                'provinsi_id' => 18,
            ),
            124 =>
            array (
                'id' => 1802,
                'name' => 'Kab. Tanggamus',
                'provinsi_id' => 18,
            ),
            125 =>
            array (
                'id' => 1803,
                'name' => 'Kab. Lampung Selatan',
                'provinsi_id' => 18,
            ),
            126 =>
            array (
                'id' => 1804,
                'name' => 'Kab. Lampung Timur',
                'provinsi_id' => 18,
            ),
            127 =>
            array (
                'id' => 1805,
                'name' => 'Kab. Lampung Tengah',
                'provinsi_id' => 18,
            ),
            128 =>
            array (
                'id' => 1806,
                'name' => 'Kab. Lampung Utara',
                'provinsi_id' => 18,
            ),
            129 =>
            array (
                'id' => 1807,
                'name' => 'Kab. Way Kanan',
                'provinsi_id' => 18,
            ),
            130 =>
            array (
                'id' => 1808,
                'name' => 'Kab. Tulangbawang',
                'provinsi_id' => 18,
            ),
            131 =>
            array (
                'id' => 1809,
                'name' => 'Kab. Pesawaran',
                'provinsi_id' => 18,
            ),
            132 =>
            array (
                'id' => 1810,
                'name' => 'Kab. Pringsewu',
                'provinsi_id' => 18,
            ),
            133 =>
            array (
                'id' => 1811,
                'name' => 'Kab. Mesuji',
                'provinsi_id' => 18,
            ),
            134 =>
            array (
                'id' => 1812,
                'name' => 'Kab. Tulang Bawang Barat',
                'provinsi_id' => 18,
            ),
            135 =>
            array (
                'id' => 1813,
                'name' => 'Kab. Pesisir Barat',
                'provinsi_id' => 18,
            ),
            136 =>
            array (
                'id' => 1871,
                'name' => 'Kota Bandar Lampung',
                'provinsi_id' => 18,
            ),
            137 =>
            array (
                'id' => 1872,
                'name' => 'Kota Metro',
                'provinsi_id' => 18,
            ),
            138 =>
            array (
                'id' => 1901,
                'name' => 'Kab. Bangka',
                'provinsi_id' => 19,
            ),
            139 =>
            array (
                'id' => 1902,
                'name' => 'Kab. Belitung',
                'provinsi_id' => 19,
            ),
            140 =>
            array (
                'id' => 1903,
                'name' => 'Kab. Bangka Barat',
                'provinsi_id' => 19,
            ),
            141 =>
            array (
                'id' => 1904,
                'name' => 'Kab. Bangka Tengah',
                'provinsi_id' => 19,
            ),
            142 =>
            array (
                'id' => 1905,
                'name' => 'Kab. Bangka Selatan',
                'provinsi_id' => 19,
            ),
            143 =>
            array (
                'id' => 1906,
                'name' => 'Kab. Belitung Timur',
                'provinsi_id' => 19,
            ),
            144 =>
            array (
                'id' => 1971,
                'name' => 'Kota Pangkal Pinang',
                'provinsi_id' => 19,
            ),
            145 =>
            array (
                'id' => 2101,
                'name' => 'Kab. Karimun',
                'provinsi_id' => 21,
            ),
            146 =>
            array (
                'id' => 2102,
                'name' => 'Kab. Bintan',
                'provinsi_id' => 21,
            ),
            147 =>
            array (
                'id' => 2103,
                'name' => 'Kab. Natuna',
                'provinsi_id' => 21,
            ),
            148 =>
            array (
                'id' => 2104,
                'name' => 'Kab. Lingga',
                'provinsi_id' => 21,
            ),
            149 =>
            array (
                'id' => 2105,
                'name' => 'Kab. Kepulauan Anambas',
                'provinsi_id' => 21,
            ),
            150 =>
            array (
                'id' => 2171,
                'name' => 'Kota B A T A M',
                'provinsi_id' => 21,
            ),
            151 =>
            array (
                'id' => 2172,
                'name' => 'Kota Tanjung Pinang',
                'provinsi_id' => 21,
            ),
            152 =>
            array (
                'id' => 3101,
                'name' => 'Kab. Kepulauan Seribu',
                'provinsi_id' => 31,
            ),
            153 =>
            array (
                'id' => 3171,
                'name' => 'Kota Jakarta Selatan',
                'provinsi_id' => 31,
            ),
            154 =>
            array (
                'id' => 3172,
                'name' => 'Kota Jakarta Timur',
                'provinsi_id' => 31,
            ),
            155 =>
            array (
                'id' => 3173,
                'name' => 'Kota Jakarta Pusat',
                'provinsi_id' => 31,
            ),
            156 =>
            array (
                'id' => 3174,
                'name' => 'Kota Jakarta Barat',
                'provinsi_id' => 31,
            ),
            157 =>
            array (
                'id' => 3175,
                'name' => 'Kota Jakarta Utara',
                'provinsi_id' => 31,
            ),
            158 =>
            array (
                'id' => 3201,
                'name' => 'Kab. Bogor',
                'provinsi_id' => 32,
            ),
            159 =>
            array (
                'id' => 3202,
                'name' => 'Kab. Sukabumi',
                'provinsi_id' => 32,
            ),
            160 =>
            array (
                'id' => 3203,
                'name' => 'Kab. Cianjur',
                'provinsi_id' => 32,
            ),
            161 =>
            array (
                'id' => 3204,
                'name' => 'Kab. Bandung',
                'provinsi_id' => 32,
            ),
            162 =>
            array (
                'id' => 3205,
                'name' => 'Kab. Garut',
                'provinsi_id' => 32,
            ),
            163 =>
            array (
                'id' => 3206,
                'name' => 'Kab. Tasikmalaya',
                'provinsi_id' => 32,
            ),
            164 =>
            array (
                'id' => 3207,
                'name' => 'Kab. Ciamis',
                'provinsi_id' => 32,
            ),
            165 =>
            array (
                'id' => 3208,
                'name' => 'Kab. Kuningan',
                'provinsi_id' => 32,
            ),
            166 =>
            array (
                'id' => 3209,
                'name' => 'Kab. Cirebon',
                'provinsi_id' => 32,
            ),
            167 =>
            array (
                'id' => 3210,
                'name' => 'Kab. Majalengka',
                'provinsi_id' => 32,
            ),
            168 =>
            array (
                'id' => 3211,
                'name' => 'Kab. Sumedang',
                'provinsi_id' => 32,
            ),
            169 =>
            array (
                'id' => 3212,
                'name' => 'Kab. Indramayu',
                'provinsi_id' => 32,
            ),
            170 =>
            array (
                'id' => 3213,
                'name' => 'Kab. Subang',
                'provinsi_id' => 32,
            ),
            171 =>
            array (
                'id' => 3214,
                'name' => 'Kab. Purwakarta',
                'provinsi_id' => 32,
            ),
            172 =>
            array (
                'id' => 3215,
                'name' => 'Kab. Karawang',
                'provinsi_id' => 32,
            ),
            173 =>
            array (
                'id' => 3216,
                'name' => 'Kab. Bekasi',
                'provinsi_id' => 32,
            ),
            174 =>
            array (
                'id' => 3217,
                'name' => 'Kab. Bandung Barat',
                'provinsi_id' => 32,
            ),
            175 =>
            array (
                'id' => 3218,
                'name' => 'Kab. Pangandaran',
                'provinsi_id' => 32,
            ),
            176 =>
            array (
                'id' => 3271,
                'name' => 'Kota Bogor',
                'provinsi_id' => 32,
            ),
            177 =>
            array (
                'id' => 3272,
                'name' => 'Kota Sukabumi',
                'provinsi_id' => 32,
            ),
            178 =>
            array (
                'id' => 3273,
                'name' => 'Kota Bandung',
                'provinsi_id' => 32,
            ),
            179 =>
            array (
                'id' => 3274,
                'name' => 'Kota Cirebon',
                'provinsi_id' => 32,
            ),
            180 =>
            array (
                'id' => 3275,
                'name' => 'Kota Bekasi',
                'provinsi_id' => 32,
            ),
            181 =>
            array (
                'id' => 3276,
                'name' => 'Kota Depok',
                'provinsi_id' => 32,
            ),
            182 =>
            array (
                'id' => 3277,
                'name' => 'Kota Cimahi',
                'provinsi_id' => 32,
            ),
            183 =>
            array (
                'id' => 3278,
                'name' => 'Kota Tasikmalaya',
                'provinsi_id' => 32,
            ),
            184 =>
            array (
                'id' => 3279,
                'name' => 'Kota Banjar',
                'provinsi_id' => 32,
            ),
            185 =>
            array (
                'id' => 3301,
                'name' => 'Kab. Cilacap',
                'provinsi_id' => 33,
            ),
            186 =>
            array (
                'id' => 3302,
                'name' => 'Kab. Banyumas',
                'provinsi_id' => 33,
            ),
            187 =>
            array (
                'id' => 3303,
                'name' => 'Kab. Purbalingga',
                'provinsi_id' => 33,
            ),
            188 =>
            array (
                'id' => 3304,
                'name' => 'Kab. Banjarnegara',
                'provinsi_id' => 33,
            ),
            189 =>
            array (
                'id' => 3305,
                'name' => 'Kab. Kebumen',
                'provinsi_id' => 33,
            ),
            190 =>
            array (
                'id' => 3306,
                'name' => 'Kab. Purworejo',
                'provinsi_id' => 33,
            ),
            191 =>
            array (
                'id' => 3307,
                'name' => 'Kab. Wonosobo',
                'provinsi_id' => 33,
            ),
            192 =>
            array (
                'id' => 3308,
                'name' => 'Kab. Magelang',
                'provinsi_id' => 33,
            ),
            193 =>
            array (
                'id' => 3309,
                'name' => 'Kab. Boyolali',
                'provinsi_id' => 33,
            ),
            194 =>
            array (
                'id' => 3310,
                'name' => 'Kab. Klaten',
                'provinsi_id' => 33,
            ),
            195 =>
            array (
                'id' => 3311,
                'name' => 'Kab. Sukoharjo',
                'provinsi_id' => 33,
            ),
            196 =>
            array (
                'id' => 3312,
                'name' => 'Kab. Wonogiri',
                'provinsi_id' => 33,
            ),
            197 =>
            array (
                'id' => 3313,
                'name' => 'Kab. Karanganyar',
                'provinsi_id' => 33,
            ),
            198 =>
            array (
                'id' => 3314,
                'name' => 'Kab. Sragen',
                'provinsi_id' => 33,
            ),
            199 =>
            array (
                'id' => 3315,
                'name' => 'Kab. Grobogan',
                'provinsi_id' => 33,
            ),
            200 =>
            array (
                'id' => 3316,
                'name' => 'Kab. Blora',
                'provinsi_id' => 33,
            ),
            201 =>
            array (
                'id' => 3317,
                'name' => 'Kab. Rembang',
                'provinsi_id' => 33,
            ),
            202 =>
            array (
                'id' => 3318,
                'name' => 'Kab. Pati',
                'provinsi_id' => 33,
            ),
            203 =>
            array (
                'id' => 3319,
                'name' => 'Kab. Kudus',
                'provinsi_id' => 33,
            ),
            204 =>
            array (
                'id' => 3320,
                'name' => 'Kab. Jepara',
                'provinsi_id' => 33,
            ),
            205 =>
            array (
                'id' => 3321,
                'name' => 'Kab. Demak',
                'provinsi_id' => 33,
            ),
            206 =>
            array (
                'id' => 3322,
                'name' => 'Kab. Semarang',
                'provinsi_id' => 33,
            ),
            207 =>
            array (
                'id' => 3323,
                'name' => 'Kab. Temanggung',
                'provinsi_id' => 33,
            ),
            208 =>
            array (
                'id' => 3324,
                'name' => 'Kab. Kendal',
                'provinsi_id' => 33,
            ),
            209 =>
            array (
                'id' => 3325,
                'name' => 'Kab. Batang',
                'provinsi_id' => 33,
            ),
            210 =>
            array (
                'id' => 3326,
                'name' => 'Kab. Pekalongan',
                'provinsi_id' => 33,
            ),
            211 =>
            array (
                'id' => 3327,
                'name' => 'Kab. Pemalang',
                'provinsi_id' => 33,
            ),
            212 =>
            array (
                'id' => 3328,
                'name' => 'Kab. Tegal',
                'provinsi_id' => 33,
            ),
            213 =>
            array (
                'id' => 3329,
                'name' => 'Kab. Brebes',
                'provinsi_id' => 33,
            ),
            214 =>
            array (
                'id' => 3371,
                'name' => 'Kota Magelang',
                'provinsi_id' => 33,
            ),
            215 =>
            array (
                'id' => 3372,
                'name' => 'Kota Surakarta',
                'provinsi_id' => 33,
            ),
            216 =>
            array (
                'id' => 3373,
                'name' => 'Kota Salatiga',
                'provinsi_id' => 33,
            ),
            217 =>
            array (
                'id' => 3374,
                'name' => 'Kota Semarang',
                'provinsi_id' => 33,
            ),
            218 =>
            array (
                'id' => 3375,
                'name' => 'Kota Pekalongan',
                'provinsi_id' => 33,
            ),
            219 =>
            array (
                'id' => 3376,
                'name' => 'Kota Tegal',
                'provinsi_id' => 33,
            ),
            220 =>
            array (
                'id' => 3401,
                'name' => 'Kab. Kulon Progo',
                'provinsi_id' => 34,
            ),
            221 =>
            array (
                'id' => 3402,
                'name' => 'Kab. Bantul',
                'provinsi_id' => 34,
            ),
            222 =>
            array (
                'id' => 3403,
                'name' => 'Kab. Gunung Kidul',
                'provinsi_id' => 34,
            ),
            223 =>
            array (
                'id' => 3404,
                'name' => 'Kab. Sleman',
                'provinsi_id' => 34,
            ),
            224 =>
            array (
                'id' => 3471,
                'name' => 'Kota Yogyakarta',
                'provinsi_id' => 34,
            ),
            225 =>
            array (
                'id' => 3501,
                'name' => 'Kab. Pacitan',
                'provinsi_id' => 35,
            ),
            226 =>
            array (
                'id' => 3502,
                'name' => 'Kab. Ponorogo',
                'provinsi_id' => 35,
            ),
            227 =>
            array (
                'id' => 3503,
                'name' => 'Kab. Trenggalek',
                'provinsi_id' => 35,
            ),
            228 =>
            array (
                'id' => 3504,
                'name' => 'Kab. Tulungagung',
                'provinsi_id' => 35,
            ),
            229 =>
            array (
                'id' => 3505,
                'name' => 'Kab. Blitar',
                'provinsi_id' => 35,
            ),
            230 =>
            array (
                'id' => 3506,
                'name' => 'Kab. Kediri',
                'provinsi_id' => 35,
            ),
            231 =>
            array (
                'id' => 3507,
                'name' => 'Kab. Malang',
                'provinsi_id' => 35,
            ),
            232 =>
            array (
                'id' => 3508,
                'name' => 'Kab. Lumajang',
                'provinsi_id' => 35,
            ),
            233 =>
            array (
                'id' => 3509,
                'name' => 'Kab. Jember',
                'provinsi_id' => 35,
            ),
            234 =>
            array (
                'id' => 3510,
                'name' => 'Kab. Banyuwangi',
                'provinsi_id' => 35,
            ),
            235 =>
            array (
                'id' => 3511,
                'name' => 'Kab. Bondowoso',
                'provinsi_id' => 35,
            ),
            236 =>
            array (
                'id' => 3512,
                'name' => 'Kab. Situbondo',
                'provinsi_id' => 35,
            ),
            237 =>
            array (
                'id' => 3513,
                'name' => 'Kab. Probolinggo',
                'provinsi_id' => 35,
            ),
            238 =>
            array (
                'id' => 3514,
                'name' => 'Kab. Pasuruan',
                'provinsi_id' => 35,
            ),
            239 =>
            array (
                'id' => 3515,
                'name' => 'Kab. Sidoarjo',
                'provinsi_id' => 35,
            ),
            240 =>
            array (
                'id' => 3516,
                'name' => 'Kab. Mojokerto',
                'provinsi_id' => 35,
            ),
            241 =>
            array (
                'id' => 3517,
                'name' => 'Kab. Jombang',
                'provinsi_id' => 35,
            ),
            242 =>
            array (
                'id' => 3518,
                'name' => 'Kab. Nganjuk',
                'provinsi_id' => 35,
            ),
            243 =>
            array (
                'id' => 3519,
                'name' => 'Kab. Madiun',
                'provinsi_id' => 35,
            ),
            244 =>
            array (
                'id' => 3520,
                'name' => 'Kab. Magetan',
                'provinsi_id' => 35,
            ),
            245 =>
            array (
                'id' => 3521,
                'name' => 'Kab. Ngawi',
                'provinsi_id' => 35,
            ),
            246 =>
            array (
                'id' => 3522,
                'name' => 'Kab. Bojonegoro',
                'provinsi_id' => 35,
            ),
            247 =>
            array (
                'id' => 3523,
                'name' => 'Kab. Tuban',
                'provinsi_id' => 35,
            ),
            248 =>
            array (
                'id' => 3524,
                'name' => 'Kab. Lamongan',
                'provinsi_id' => 35,
            ),
            249 =>
            array (
                'id' => 3525,
                'name' => 'Kab. Gresik',
                'provinsi_id' => 35,
            ),
            250 =>
            array (
                'id' => 3526,
                'name' => 'Kab. Bangkalan',
                'provinsi_id' => 35,
            ),
            251 =>
            array (
                'id' => 3527,
                'name' => 'Kab. Sampang',
                'provinsi_id' => 35,
            ),
            252 =>
            array (
                'id' => 3528,
                'name' => 'Kab. Pamekasan',
                'provinsi_id' => 35,
            ),
            253 =>
            array (
                'id' => 3529,
                'name' => 'Kab. Sumenep',
                'provinsi_id' => 35,
            ),
            254 =>
            array (
                'id' => 3571,
                'name' => 'Kota Kediri',
                'provinsi_id' => 35,
            ),
            255 =>
            array (
                'id' => 3572,
                'name' => 'Kota Blitar',
                'provinsi_id' => 35,
            ),
            256 =>
            array (
                'id' => 3573,
                'name' => 'Kota Malang',
                'provinsi_id' => 35,
            ),
            257 =>
            array (
                'id' => 3574,
                'name' => 'Kota Probolinggo',
                'provinsi_id' => 35,
            ),
            258 =>
            array (
                'id' => 3575,
                'name' => 'Kota Pasuruan',
                'provinsi_id' => 35,
            ),
            259 =>
            array (
                'id' => 3576,
                'name' => 'Kota Mojokerto',
                'provinsi_id' => 35,
            ),
            260 =>
            array (
                'id' => 3577,
                'name' => 'Kota Madiun',
                'provinsi_id' => 35,
            ),
            261 =>
            array (
                'id' => 3578,
                'name' => 'Kota Surabaya',
                'provinsi_id' => 35,
            ),
            262 =>
            array (
                'id' => 3579,
                'name' => 'Kota Batu',
                'provinsi_id' => 35,
            ),
            263 =>
            array (
                'id' => 3601,
                'name' => 'Kab. Pandeglang',
                'provinsi_id' => 36,
            ),
            264 =>
            array (
                'id' => 3602,
                'name' => 'Kab. Lebak',
                'provinsi_id' => 36,
            ),
            265 =>
            array (
                'id' => 3603,
                'name' => 'Kab. Tangerang',
                'provinsi_id' => 36,
            ),
            266 =>
            array (
                'id' => 3604,
                'name' => 'Kab. Serang',
                'provinsi_id' => 36,
            ),
            267 =>
            array (
                'id' => 3671,
                'name' => 'Kota Tangerang',
                'provinsi_id' => 36,
            ),
            268 =>
            array (
                'id' => 3672,
                'name' => 'Kota Cilegon',
                'provinsi_id' => 36,
            ),
            269 =>
            array (
                'id' => 3673,
                'name' => 'Kota Serang',
                'provinsi_id' => 36,
            ),
            270 =>
            array (
                'id' => 3674,
                'name' => 'Kota Tangerang Selatan',
                'provinsi_id' => 36,
            ),
            271 =>
            array (
                'id' => 5101,
                'name' => 'Kab. Jembrana',
                'provinsi_id' => 51,
            ),
            272 =>
            array (
                'id' => 5102,
                'name' => 'Kab. Tabanan',
                'provinsi_id' => 51,
            ),
            273 =>
            array (
                'id' => 5103,
                'name' => 'Kab. Badung',
                'provinsi_id' => 51,
            ),
            274 =>
            array (
                'id' => 5104,
                'name' => 'Kab. Gianyar',
                'provinsi_id' => 51,
            ),
            275 =>
            array (
                'id' => 5105,
                'name' => 'Kab. Klungkung',
                'provinsi_id' => 51,
            ),
            276 =>
            array (
                'id' => 5106,
                'name' => 'Kab. Bangli',
                'provinsi_id' => 51,
            ),
            277 =>
            array (
                'id' => 5107,
                'name' => 'Kab. Karang Asem',
                'provinsi_id' => 51,
            ),
            278 =>
            array (
                'id' => 5108,
                'name' => 'Kab. Buleleng',
                'provinsi_id' => 51,
            ),
            279 =>
            array (
                'id' => 5171,
                'name' => 'Kota Denpasar',
                'provinsi_id' => 51,
            ),
            280 =>
            array (
                'id' => 5201,
                'name' => 'Kab. Lombok Barat',
                'provinsi_id' => 52,
            ),
            281 =>
            array (
                'id' => 5202,
                'name' => 'Kab. Lombok Tengah',
                'provinsi_id' => 52,
            ),
            282 =>
            array (
                'id' => 5203,
                'name' => 'Kab. Lombok Timur',
                'provinsi_id' => 52,
            ),
            283 =>
            array (
                'id' => 5204,
                'name' => 'Kab. Sumbawa',
                'provinsi_id' => 52,
            ),
            284 =>
            array (
                'id' => 5205,
                'name' => 'Kab. Dompu',
                'provinsi_id' => 52,
            ),
            285 =>
            array (
                'id' => 5206,
                'name' => 'Kab. Bima',
                'provinsi_id' => 52,
            ),
            286 =>
            array (
                'id' => 5207,
                'name' => 'Kab. Sumbawa Barat',
                'provinsi_id' => 52,
            ),
            287 =>
            array (
                'id' => 5208,
                'name' => 'Kab. Lombok Utara',
                'provinsi_id' => 52,
            ),
            288 =>
            array (
                'id' => 5271,
                'name' => 'Kota Mataram',
                'provinsi_id' => 52,
            ),
            289 =>
            array (
                'id' => 5272,
                'name' => 'Kota Bima',
                'provinsi_id' => 52,
            ),
            290 =>
            array (
                'id' => 5301,
                'name' => 'Kab. Sumba Barat',
                'provinsi_id' => 53,
            ),
            291 =>
            array (
                'id' => 5302,
                'name' => 'Kab. Sumba Timur',
                'provinsi_id' => 53,
            ),
            292 =>
            array (
                'id' => 5303,
                'name' => 'Kab. Kupang',
                'provinsi_id' => 53,
            ),
            293 =>
            array (
                'id' => 5304,
                'name' => 'Kab. Timor Tengah Selatan',
                'provinsi_id' => 53,
            ),
            294 =>
            array (
                'id' => 5305,
                'name' => 'Kab. Timor Tengah Utara',
                'provinsi_id' => 53,
            ),
            295 =>
            array (
                'id' => 5306,
                'name' => 'Kab. Belu',
                'provinsi_id' => 53,
            ),
            296 =>
            array (
                'id' => 5307,
                'name' => 'Kab. Alor',
                'provinsi_id' => 53,
            ),
            297 =>
            array (
                'id' => 5308,
                'name' => 'Kab. Lembata',
                'provinsi_id' => 53,
            ),
            298 =>
            array (
                'id' => 5309,
                'name' => 'Kab. Flores Timur',
                'provinsi_id' => 53,
            ),
            299 =>
            array (
                'id' => 5310,
                'name' => 'Kab. Sikka',
                'provinsi_id' => 53,
            ),
            300 =>
            array (
                'id' => 5311,
                'name' => 'Kab. Ende',
                'provinsi_id' => 53,
            ),
            301 =>
            array (
                'id' => 5312,
                'name' => 'Kab. Ngada',
                'provinsi_id' => 53,
            ),
            302 =>
            array (
                'id' => 5313,
                'name' => 'Kab. Manggarai',
                'provinsi_id' => 53,
            ),
            303 =>
            array (
                'id' => 5314,
                'name' => 'Kab. Rote Ndao',
                'provinsi_id' => 53,
            ),
            304 =>
            array (
                'id' => 5315,
                'name' => 'Kab. Manggarai Barat',
                'provinsi_id' => 53,
            ),
            305 =>
            array (
                'id' => 5316,
                'name' => 'Kab. Sumba Tengah',
                'provinsi_id' => 53,
            ),
            306 =>
            array (
                'id' => 5317,
                'name' => 'Kab. Sumba Barat Daya',
                'provinsi_id' => 53,
            ),
            307 =>
            array (
                'id' => 5318,
                'name' => 'Kab. Nagekeo',
                'provinsi_id' => 53,
            ),
            308 =>
            array (
                'id' => 5319,
                'name' => 'Kab. Manggarai Timur',
                'provinsi_id' => 53,
            ),
            309 =>
            array (
                'id' => 5320,
                'name' => 'Kab. Sabu Raijua',
                'provinsi_id' => 53,
            ),
            310 =>
            array (
                'id' => 5371,
                'name' => 'Kota Kupang',
                'provinsi_id' => 53,
            ),
            311 =>
            array (
                'id' => 6101,
                'name' => 'Kab. Sambas',
                'provinsi_id' => 61,
            ),
            312 =>
            array (
                'id' => 6102,
                'name' => 'Kab. Bengkayang',
                'provinsi_id' => 61,
            ),
            313 =>
            array (
                'id' => 6103,
                'name' => 'Kab. Landak',
                'provinsi_id' => 61,
            ),
            314 =>
            array (
                'id' => 6104,
                'name' => 'Kab. Pontianak',
                'provinsi_id' => 61,
            ),
            315 =>
            array (
                'id' => 6105,
                'name' => 'Kab. Sanggau',
                'provinsi_id' => 61,
            ),
            316 =>
            array (
                'id' => 6106,
                'name' => 'Kab. Ketapang',
                'provinsi_id' => 61,
            ),
            317 =>
            array (
                'id' => 6107,
                'name' => 'Kab. Sintang',
                'provinsi_id' => 61,
            ),
            318 =>
            array (
                'id' => 6108,
                'name' => 'Kab. Kapuas Hulu',
                'provinsi_id' => 61,
            ),
            319 =>
            array (
                'id' => 6109,
                'name' => 'Kab. Sekadau',
                'provinsi_id' => 61,
            ),
            320 =>
            array (
                'id' => 6110,
                'name' => 'Kab. Melawi',
                'provinsi_id' => 61,
            ),
            321 =>
            array (
                'id' => 6111,
                'name' => 'Kab. Kayong Utara',
                'provinsi_id' => 61,
            ),
            322 =>
            array (
                'id' => 6112,
                'name' => 'Kab. Kubu Raya',
                'provinsi_id' => 61,
            ),
            323 =>
            array (
                'id' => 6171,
                'name' => 'Kota Pontianak',
                'provinsi_id' => 61,
            ),
            324 =>
            array (
                'id' => 6172,
                'name' => 'Kota Singkawang',
                'provinsi_id' => 61,
            ),
            325 =>
            array (
                'id' => 6201,
                'name' => 'Kab. Kotawaringin Barat',
                'provinsi_id' => 62,
            ),
            326 =>
            array (
                'id' => 6202,
                'name' => 'Kab. Kotawaringin Timur',
                'provinsi_id' => 62,
            ),
            327 =>
            array (
                'id' => 6203,
                'name' => 'Kab. Kapuas',
                'provinsi_id' => 62,
            ),
            328 =>
            array (
                'id' => 6204,
                'name' => 'Kab. Barito Selatan',
                'provinsi_id' => 62,
            ),
            329 =>
            array (
                'id' => 6205,
                'name' => 'Kab. Barito Utara',
                'provinsi_id' => 62,
            ),
            330 =>
            array (
                'id' => 6206,
                'name' => 'Kab. Sukamara',
                'provinsi_id' => 62,
            ),
            331 =>
            array (
                'id' => 6207,
                'name' => 'Kab. Lamandau',
                'provinsi_id' => 62,
            ),
            332 =>
            array (
                'id' => 6208,
                'name' => 'Kab. Seruyan',
                'provinsi_id' => 62,
            ),
            333 =>
            array (
                'id' => 6209,
                'name' => 'Kab. Katingan',
                'provinsi_id' => 62,
            ),
            334 =>
            array (
                'id' => 6210,
                'name' => 'Kab. Pulang Pisau',
                'provinsi_id' => 62,
            ),
            335 =>
            array (
                'id' => 6211,
                'name' => 'Kab. Gunung Mas',
                'provinsi_id' => 62,
            ),
            336 =>
            array (
                'id' => 6212,
                'name' => 'Kab. Barito Timur',
                'provinsi_id' => 62,
            ),
            337 =>
            array (
                'id' => 6213,
                'name' => 'Kab. Murung Raya',
                'provinsi_id' => 62,
            ),
            338 =>
            array (
                'id' => 6271,
                'name' => 'Kota Palangka Raya',
                'provinsi_id' => 62,
            ),
            339 =>
            array (
                'id' => 6301,
                'name' => 'Kab. Tanah Laut',
                'provinsi_id' => 63,
            ),
            340 =>
            array (
                'id' => 6302,
                'name' => 'Kab. Kota Baru',
                'provinsi_id' => 63,
            ),
            341 =>
            array (
                'id' => 6303,
                'name' => 'Kab. Banjar',
                'provinsi_id' => 63,
            ),
            342 =>
            array (
                'id' => 6304,
                'name' => 'Kab. Barito Kuala',
                'provinsi_id' => 63,
            ),
            343 =>
            array (
                'id' => 6305,
                'name' => 'Kab. Tapin',
                'provinsi_id' => 63,
            ),
            344 =>
            array (
                'id' => 6306,
                'name' => 'Kab. Hulu Sungai Selatan',
                'provinsi_id' => 63,
            ),
            345 =>
            array (
                'id' => 6307,
                'name' => 'Kab. Hulu Sungai Tengah',
                'provinsi_id' => 63,
            ),
            346 =>
            array (
                'id' => 6308,
                'name' => 'Kab. Hulu Sungai Utara',
                'provinsi_id' => 63,
            ),
            347 =>
            array (
                'id' => 6309,
                'name' => 'Kab. Tabalong',
                'provinsi_id' => 63,
            ),
            348 =>
            array (
                'id' => 6310,
                'name' => 'Kab. Tanah Bumbu',
                'provinsi_id' => 63,
            ),
            349 =>
            array (
                'id' => 6311,
                'name' => 'Kab. Balangan',
                'provinsi_id' => 63,
            ),
            350 =>
            array (
                'id' => 6371,
                'name' => 'Kota Banjarmasin',
                'provinsi_id' => 63,
            ),
            351 =>
            array (
                'id' => 6372,
                'name' => 'Kota Banjar Baru',
                'provinsi_id' => 63,
            ),
            352 =>
            array (
                'id' => 6401,
                'name' => 'Kab. Paser',
                'provinsi_id' => 64,
            ),
            353 =>
            array (
                'id' => 6402,
                'name' => 'Kab. Kutai Barat',
                'provinsi_id' => 64,
            ),
            354 =>
            array (
                'id' => 6403,
                'name' => 'Kab. Kutai Kartanegara',
                'provinsi_id' => 64,
            ),
            355 =>
            array (
                'id' => 6404,
                'name' => 'Kab. Kutai Timur',
                'provinsi_id' => 64,
            ),
            356 =>
            array (
                'id' => 6405,
                'name' => 'Kab. Berau',
                'provinsi_id' => 64,
            ),
            357 =>
            array (
                'id' => 6409,
                'name' => 'Kab. Penajam Paser Utara',
                'provinsi_id' => 64,
            ),
            358 =>
            array (
                'id' => 6471,
                'name' => 'Kota Balikpapan',
                'provinsi_id' => 64,
            ),
            359 =>
            array (
                'id' => 6472,
                'name' => 'Kota Samarinda',
                'provinsi_id' => 64,
            ),
            360 =>
            array (
                'id' => 6474,
                'name' => 'Kota Bontang',
                'provinsi_id' => 64,
            ),
            361 =>
            array (
                'id' => 6501,
                'name' => 'Kab. Malinau',
                'provinsi_id' => 65,
            ),
            362 =>
            array (
                'id' => 6502,
                'name' => 'Kab. Bulungan',
                'provinsi_id' => 65,
            ),
            363 =>
            array (
                'id' => 6503,
                'name' => 'Kab. Tana Tidung',
                'provinsi_id' => 65,
            ),
            364 =>
            array (
                'id' => 6504,
                'name' => 'Kab. Nunukan',
                'provinsi_id' => 65,
            ),
            365 =>
            array (
                'id' => 6571,
                'name' => 'Kota Tarakan',
                'provinsi_id' => 65,
            ),
            366 =>
            array (
                'id' => 7101,
                'name' => 'Kab. Bolaang Mongondow',
                'provinsi_id' => 71,
            ),
            367 =>
            array (
                'id' => 7102,
                'name' => 'Kab. Minahasa',
                'provinsi_id' => 71,
            ),
            368 =>
            array (
                'id' => 7103,
                'name' => 'Kab. Kepulauan Sangihe',
                'provinsi_id' => 71,
            ),
            369 =>
            array (
                'id' => 7104,
                'name' => 'Kab. Kepulauan Talaud',
                'provinsi_id' => 71,
            ),
            370 =>
            array (
                'id' => 7105,
                'name' => 'Kab. Minahasa Selatan',
                'provinsi_id' => 71,
            ),
            371 =>
            array (
                'id' => 7106,
                'name' => 'Kab. Minahasa Utara',
                'provinsi_id' => 71,
            ),
            372 =>
            array (
                'id' => 7107,
                'name' => 'Kab. Bolaang Mongondow Utara',
                'provinsi_id' => 71,
            ),
            373 =>
            array (
                'id' => 7108,
                'name' => 'Kab. Siau Tagulandang Biaro',
                'provinsi_id' => 71,
            ),
            374 =>
            array (
                'id' => 7109,
                'name' => 'Kab. Minahasa Tenggara',
                'provinsi_id' => 71,
            ),
            375 =>
            array (
                'id' => 7110,
                'name' => 'Kab. Bolaang Mongondow Selatan',
                'provinsi_id' => 71,
            ),
            376 =>
            array (
                'id' => 7111,
                'name' => 'Kab. Bolaang Mongondow Timur',
                'provinsi_id' => 71,
            ),
            377 =>
            array (
                'id' => 7171,
                'name' => 'Kota Manado',
                'provinsi_id' => 71,
            ),
            378 =>
            array (
                'id' => 7172,
                'name' => 'Kota Bitung',
                'provinsi_id' => 71,
            ),
            379 =>
            array (
                'id' => 7173,
                'name' => 'Kota Tomohon',
                'provinsi_id' => 71,
            ),
            380 =>
            array (
                'id' => 7174,
                'name' => 'Kota Kotamobagu',
                'provinsi_id' => 71,
            ),
            381 =>
            array (
                'id' => 7201,
                'name' => 'Kab. Banggai Kepulauan',
                'provinsi_id' => 72,
            ),
            382 =>
            array (
                'id' => 7202,
                'name' => 'Kab. Banggai',
                'provinsi_id' => 72,
            ),
            383 =>
            array (
                'id' => 7203,
                'name' => 'Kab. Morowali',
                'provinsi_id' => 72,
            ),
            384 =>
            array (
                'id' => 7204,
                'name' => 'Kab. Poso',
                'provinsi_id' => 72,
            ),
            385 =>
            array (
                'id' => 7205,
                'name' => 'Kab. Donggala',
                'provinsi_id' => 72,
            ),
            386 =>
            array (
                'id' => 7206,
                'name' => 'Kab. Toli-toli',
                'provinsi_id' => 72,
            ),
            387 =>
            array (
                'id' => 7207,
                'name' => 'Kab. Buol',
                'provinsi_id' => 72,
            ),
            388 =>
            array (
                'id' => 7208,
                'name' => 'Kab. Parigi Moutong',
                'provinsi_id' => 72,
            ),
            389 =>
            array (
                'id' => 7209,
                'name' => 'Kab. Tojo Una-una',
                'provinsi_id' => 72,
            ),
            390 =>
            array (
                'id' => 7210,
                'name' => 'Kab. Sigi',
                'provinsi_id' => 72,
            ),
            391 =>
            array (
                'id' => 7271,
                'name' => 'Kota Palu',
                'provinsi_id' => 72,
            ),
            392 =>
            array (
                'id' => 7301,
                'name' => 'Kab. Kepulauan Selayar',
                'provinsi_id' => 73,
            ),
            393 =>
            array (
                'id' => 7302,
                'name' => 'Kab. Bulukumba',
                'provinsi_id' => 73,
            ),
            394 =>
            array (
                'id' => 7303,
                'name' => 'Kab. Bantaeng',
                'provinsi_id' => 73,
            ),
            395 =>
            array (
                'id' => 7304,
                'name' => 'Kab. Jeneponto',
                'provinsi_id' => 73,
            ),
            396 =>
            array (
                'id' => 7305,
                'name' => 'Kab. Takalar',
                'provinsi_id' => 73,
            ),
            397 =>
            array (
                'id' => 7306,
                'name' => 'Kab. Gowa',
                'provinsi_id' => 73,
            ),
            398 =>
            array (
                'id' => 7307,
                'name' => 'Kab. Sinjai',
                'provinsi_id' => 73,
            ),
            399 =>
            array (
                'id' => 7308,
                'name' => 'Kab. Maros',
                'provinsi_id' => 73,
            ),
            400 =>
            array (
                'id' => 7309,
                'name' => 'Kab. Pangkajene Dan Kepulauan',
                'provinsi_id' => 73,
            ),
            401 =>
            array (
                'id' => 7310,
                'name' => 'Kab. Barru',
                'provinsi_id' => 73,
            ),
            402 =>
            array (
                'id' => 7311,
                'name' => 'Kab. Bone',
                'provinsi_id' => 73,
            ),
            403 =>
            array (
                'id' => 7312,
                'name' => 'Kab. Soppeng',
                'provinsi_id' => 73,
            ),
            404 =>
            array (
                'id' => 7313,
                'name' => 'Kab. Wajo',
                'provinsi_id' => 73,
            ),
            405 =>
            array (
                'id' => 7314,
                'name' => 'Kab. Sidenreng Rappang',
                'provinsi_id' => 73,
            ),
            406 =>
            array (
                'id' => 7315,
                'name' => 'Kab. Pinrang',
                'provinsi_id' => 73,
            ),
            407 =>
            array (
                'id' => 7316,
                'name' => 'Kab. Enrekang',
                'provinsi_id' => 73,
            ),
            408 =>
            array (
                'id' => 7317,
                'name' => 'Kab. Luwu',
                'provinsi_id' => 73,
            ),
            409 =>
            array (
                'id' => 7318,
                'name' => 'Kab. Tana Toraja',
                'provinsi_id' => 73,
            ),
            410 =>
            array (
                'id' => 7322,
                'name' => 'Kab. Luwu Utara',
                'provinsi_id' => 73,
            ),
            411 =>
            array (
                'id' => 7325,
                'name' => 'Kab. Luwu Timur',
                'provinsi_id' => 73,
            ),
            412 =>
            array (
                'id' => 7326,
                'name' => 'Kab. Toraja Utara',
                'provinsi_id' => 73,
            ),
            413 =>
            array (
                'id' => 7371,
                'name' => 'Kota Makassar',
                'provinsi_id' => 73,
            ),
            414 =>
            array (
                'id' => 7372,
                'name' => 'Kota Parepare',
                'provinsi_id' => 73,
            ),
            415 =>
            array (
                'id' => 7373,
                'name' => 'Kota Palopo',
                'provinsi_id' => 73,
            ),
            416 =>
            array (
                'id' => 7401,
                'name' => 'Kab. Buton',
                'provinsi_id' => 74,
            ),
            417 =>
            array (
                'id' => 7402,
                'name' => 'Kab. Muna',
                'provinsi_id' => 74,
            ),
            418 =>
            array (
                'id' => 7403,
                'name' => 'Kab. Konawe',
                'provinsi_id' => 74,
            ),
            419 =>
            array (
                'id' => 7404,
                'name' => 'Kab. Kolaka',
                'provinsi_id' => 74,
            ),
            420 =>
            array (
                'id' => 7405,
                'name' => 'Kab. Konawe Selatan',
                'provinsi_id' => 74,
            ),
            421 =>
            array (
                'id' => 7406,
                'name' => 'Kab. Bombana',
                'provinsi_id' => 74,
            ),
            422 =>
            array (
                'id' => 7407,
                'name' => 'Kab. Wakatobi',
                'provinsi_id' => 74,
            ),
            423 =>
            array (
                'id' => 7408,
                'name' => 'Kab. Kolaka Utara',
                'provinsi_id' => 74,
            ),
            424 =>
            array (
                'id' => 7409,
                'name' => 'Kab. Buton Utara',
                'provinsi_id' => 74,
            ),
            425 =>
            array (
                'id' => 7410,
                'name' => 'Kab. Konawe Utara',
                'provinsi_id' => 74,
            ),
            426 =>
            array (
                'id' => 7471,
                'name' => 'Kota Kendari',
                'provinsi_id' => 74,
            ),
            427 =>
            array (
                'id' => 7472,
                'name' => 'Kota Baubau',
                'provinsi_id' => 74,
            ),
            428 =>
            array (
                'id' => 7501,
                'name' => 'Kab. Boalemo',
                'provinsi_id' => 75,
            ),
            429 =>
            array (
                'id' => 7502,
                'name' => 'Kab. Gorontalo',
                'provinsi_id' => 75,
            ),
            430 =>
            array (
                'id' => 7503,
                'name' => 'Kab. Pohuwato',
                'provinsi_id' => 75,
            ),
            431 =>
            array (
                'id' => 7504,
                'name' => 'Kab. Bone Bolango',
                'provinsi_id' => 75,
            ),
            432 =>
            array (
                'id' => 7505,
                'name' => 'Kab. Gorontalo Utara',
                'provinsi_id' => 75,
            ),
            433 =>
            array (
                'id' => 7571,
                'name' => 'Kota Gorontalo',
                'provinsi_id' => 75,
            ),
            434 =>
            array (
                'id' => 7601,
                'name' => 'Kab. Majene',
                'provinsi_id' => 76,
            ),
            435 =>
            array (
                'id' => 7602,
                'name' => 'Kab. Polewali Mandar',
                'provinsi_id' => 76,
            ),
            436 =>
            array (
                'id' => 7603,
                'name' => 'Kab. Mamasa',
                'provinsi_id' => 76,
            ),
            437 =>
            array (
                'id' => 7604,
                'name' => 'Kab. Mamuju',
                'provinsi_id' => 76,
            ),
            438 =>
            array (
                'id' => 7605,
                'name' => 'Kab. Mamuju Utara',
                'provinsi_id' => 76,
            ),
            439 =>
            array (
                'id' => 8101,
                'name' => 'Kab. Maluku Tenggara Barat',
                'provinsi_id' => 81,
            ),
            440 =>
            array (
                'id' => 8102,
                'name' => 'Kab. Maluku Tenggara',
                'provinsi_id' => 81,
            ),
            441 =>
            array (
                'id' => 8103,
                'name' => 'Kab. Maluku Tengah',
                'provinsi_id' => 81,
            ),
            442 =>
            array (
                'id' => 8104,
                'name' => 'Kab. Buru',
                'provinsi_id' => 81,
            ),
            443 =>
            array (
                'id' => 8105,
                'name' => 'Kab. Kepulauan Aru',
                'provinsi_id' => 81,
            ),
            444 =>
            array (
                'id' => 8106,
                'name' => 'Kab. Seram Bagian Barat',
                'provinsi_id' => 81,
            ),
            445 =>
            array (
                'id' => 8107,
                'name' => 'Kab. Seram Bagian Timur',
                'provinsi_id' => 81,
            ),
            446 =>
            array (
                'id' => 8108,
                'name' => 'Kab. Maluku Barat Daya',
                'provinsi_id' => 81,
            ),
            447 =>
            array (
                'id' => 8109,
                'name' => 'Kab. Buru Selatan',
                'provinsi_id' => 81,
            ),
            448 =>
            array (
                'id' => 8171,
                'name' => 'Kota Ambon',
                'provinsi_id' => 81,
            ),
            449 =>
            array (
                'id' => 8172,
                'name' => 'Kota Tual',
                'provinsi_id' => 81,
            ),
            450 =>
            array (
                'id' => 8201,
                'name' => 'Kab. Halmahera Barat',
                'provinsi_id' => 82,
            ),
            451 =>
            array (
                'id' => 8202,
                'name' => 'Kab. Halmahera Tengah',
                'provinsi_id' => 82,
            ),
            452 =>
            array (
                'id' => 8203,
                'name' => 'Kab. Kepulauan Sula',
                'provinsi_id' => 82,
            ),
            453 =>
            array (
                'id' => 8204,
                'name' => 'Kab. Halmahera Selatan',
                'provinsi_id' => 82,
            ),
            454 =>
            array (
                'id' => 8205,
                'name' => 'Kab. Halmahera Utara',
                'provinsi_id' => 82,
            ),
            455 =>
            array (
                'id' => 8206,
                'name' => 'Kab. Halmahera Timur',
                'provinsi_id' => 82,
            ),
            456 =>
            array (
                'id' => 8207,
                'name' => 'Kab. Pulau Morotai',
                'provinsi_id' => 82,
            ),
            457 =>
            array (
                'id' => 8271,
                'name' => 'Kota Ternate',
                'provinsi_id' => 82,
            ),
            458 =>
            array (
                'id' => 8272,
                'name' => 'Kota Tidore Kepulauan',
                'provinsi_id' => 82,
            ),
            459 =>
            array (
                'id' => 9101,
                'name' => 'Kab. Fakfak',
                'provinsi_id' => 91,
            ),
            460 =>
            array (
                'id' => 9102,
                'name' => 'Kab. Kaimana',
                'provinsi_id' => 91,
            ),
            461 =>
            array (
                'id' => 9103,
                'name' => 'Kab. Teluk Wondama',
                'provinsi_id' => 91,
            ),
            462 =>
            array (
                'id' => 9104,
                'name' => 'Kab. Teluk Bintuni',
                'provinsi_id' => 91,
            ),
            463 =>
            array (
                'id' => 9105,
                'name' => 'Kab. Manokwari',
                'provinsi_id' => 91,
            ),
            464 =>
            array (
                'id' => 9106,
                'name' => 'Kab. Sorong Selatan',
                'provinsi_id' => 91,
            ),
            465 =>
            array (
                'id' => 9107,
                'name' => 'Kab. Sorong',
                'provinsi_id' => 91,
            ),
            466 =>
            array (
                'id' => 9108,
                'name' => 'Kab. Raja Ampat',
                'provinsi_id' => 91,
            ),
            467 =>
            array (
                'id' => 9109,
                'name' => 'Kab. Tambrauw',
                'provinsi_id' => 91,
            ),
            468 =>
            array (
                'id' => 9110,
                'name' => 'Kab. Maybrat',
                'provinsi_id' => 91,
            ),
            469 =>
            array (
                'id' => 9171,
                'name' => 'Kota Sorong',
                'provinsi_id' => 91,
            ),
            470 =>
            array (
                'id' => 9401,
                'name' => 'Kab. Merauke',
                'provinsi_id' => 94,
            ),
            471 =>
            array (
                'id' => 9402,
                'name' => 'Kab. Jayawijaya',
                'provinsi_id' => 94,
            ),
            472 =>
            array (
                'id' => 9403,
                'name' => 'Kab. Jayapura',
                'provinsi_id' => 94,
            ),
            473 =>
            array (
                'id' => 9404,
                'name' => 'Kab. Nabire',
                'provinsi_id' => 94,
            ),
            474 =>
            array (
                'id' => 9408,
                'name' => 'Kab. Kepulauan Yapen',
                'provinsi_id' => 94,
            ),
            475 =>
            array (
                'id' => 9409,
                'name' => 'Kab. Biak Numfor',
                'provinsi_id' => 94,
            ),
            476 =>
            array (
                'id' => 9410,
                'name' => 'Kab. Paniai',
                'provinsi_id' => 94,
            ),
            477 =>
            array (
                'id' => 9411,
                'name' => 'Kab. Puncak Jaya',
                'provinsi_id' => 94,
            ),
            478 =>
            array (
                'id' => 9412,
                'name' => 'Kab. Mimika',
                'provinsi_id' => 94,
            ),
            479 =>
            array (
                'id' => 9413,
                'name' => 'Kab. Boven Digoel',
                'provinsi_id' => 94,
            ),
            480 =>
            array (
                'id' => 9414,
                'name' => 'Kab. Mappi',
                'provinsi_id' => 94,
            ),
            481 =>
            array (
                'id' => 9415,
                'name' => 'Kab. Asmat',
                'provinsi_id' => 94,
            ),
            482 =>
            array (
                'id' => 9416,
                'name' => 'Kab. Yahukimo',
                'provinsi_id' => 94,
            ),
            483 =>
            array (
                'id' => 9417,
                'name' => 'Kab. Pegunungan Bintang',
                'provinsi_id' => 94,
            ),
            484 =>
            array (
                'id' => 9418,
                'name' => 'Kab. Tolikara',
                'provinsi_id' => 94,
            ),
            485 =>
            array (
                'id' => 9419,
                'name' => 'Kab. Sarmi',
                'provinsi_id' => 94,
            ),
            486 =>
            array (
                'id' => 9420,
                'name' => 'Kab. Keerom',
                'provinsi_id' => 94,
            ),
            487 =>
            array (
                'id' => 9426,
                'name' => 'Kab. Waropen',
                'provinsi_id' => 94,
            ),
            488 =>
            array (
                'id' => 9427,
                'name' => 'Kab. Supiori',
                'provinsi_id' => 94,
            ),
            489 =>
            array (
                'id' => 9428,
                'name' => 'Kab. Mamberamo Raya',
                'provinsi_id' => 94,
            ),
            490 =>
            array (
                'id' => 9429,
                'name' => 'Kab. Nduga',
                'provinsi_id' => 94,
            ),
            491 =>
            array (
                'id' => 9430,
                'name' => 'Kab. Lanny Jaya',
                'provinsi_id' => 94,
            ),
            492 =>
            array (
                'id' => 9431,
                'name' => 'Kab. Mamberamo Tengah',
                'provinsi_id' => 94,
            ),
            493 =>
            array (
                'id' => 9432,
                'name' => 'Kab. Yalimo',
                'provinsi_id' => 94,
            ),
            494 =>
            array (
                'id' => 9433,
                'name' => 'Kab. Puncak',
                'provinsi_id' => 94,
            ),
            495 =>
            array (
                'id' => 9434,
                'name' => 'Kab. Dogiyai',
                'provinsi_id' => 94,
            ),
            496 =>
            array (
                'id' => 9435,
                'name' => 'Kab. Intan Jaya',
                'provinsi_id' => 94,
            ),
            497 =>
            array (
                'id' => 9436,
                'name' => 'Kab. Deiyai',
                'provinsi_id' => 94,
            ),
            498 =>
            array (
                'id' => 9471,
                'name' => 'Kota Jayapura',
                'provinsi_id' => 94,
            ),
            499 =>
            array (
                'id' => 9472,
                'name' => 'Kab. Mempawah',
                'provinsi_id' => 61,
            ),
        ));
    }
}
