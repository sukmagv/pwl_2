<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kendaraan')->insert([
            [
                'no_pol' => 'AG1234XZ',
                'merk' => 'Honda',
                'jenis' => 'Supra',
                'tahun_buat' => 2005,
                'warna' => 'hitam'
            ],
            [
                'no_pol' => 'AG7846LX',
                'merk' => 'Yamaha',
                'jenis' => 'Jupiter',
                'tahun_buat' => 2003,
                'warna' => 'merah'
            ],
            [
                'no_pol' => 'AG9374DF',
                'merk' => 'Honda',
                'jenis' => 'Vario',
                'tahun_buat' => 2012,
                'warna' => 'abu-abu'
            ]
        ]);
    }
}
