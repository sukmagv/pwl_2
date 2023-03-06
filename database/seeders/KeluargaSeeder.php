<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keluarga')->insert([
            [
                'status' => 'Ayah',
                'nama' => 'Moch. Zainal',
                'umur' => '44',
                'daerah_asal' => 'Bojonegoro',
                'pekerjaan' => 'Karyawan Swasta'
            ],
            [
                'status' => 'Ibu',
                'nama' => 'Hartatik',
                'umur' => '45',
                'daerah_asal' => 'Trenggalek',
                'pekerjaan' => 'Ibu Rumah Tangga'
            ],
            [
                'status' => 'Anak',
                'nama' => 'Sukma Gladys Vellanie',
                'umur' => '20',
                'daerah_asal' => 'Trenggalek',
                'pekerjaan' => 'Mahasiswi'
            ]
        ]);
    }
}
