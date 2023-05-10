<?php

namespace Database\Seeders;

use App\Models\Mahasiswa_Matakuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MhsMatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mhs_matkul')->insert([
            [
                'mhs_id' => '1',
                'matkul_id' => '19',
            ],
            [
                'mhs_id' => '1',
                'matkul_id' => '20',
            ],
            [
                'mhs_id' => '1',
                'matkul_id' => '21',
            ],
            [
                'mhs_id' => '1',
                'matkul_id' => '22',
            ],
            [
                'mhs_id' => '1',
                'matkul_id' => '23',
            ],
        ]);
    }
}
