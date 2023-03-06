<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobi')->insert([
            [
                'hobi' => 'mendengarkan musik',
                'alasan' => 'musik memiliki berbagai genre dengan keindahan masing-masing,
                            selain itu, musik dapat merelaksasi pikiran baik itu lagu atau musik instrumental'
            ],
            [
                'hobi' => 'menonton anime',
                'alasan' => 'anime memiliki berbagai cerita menarik mulai dari cerita yang ringan sampai plot yang kompleks,
                            selain itu, anime membuat saya belajar bahasa jepang'
            ],
            [
                'hobi' => 'membaca cerita fiksi',
                'alasan' => 'membaca cerita fiksi membuat saya belajar banyak kata baru dan menambah kreaitifitas imajinasi'
            ],
            [
                'hobi' => 'rebahan',
                'alasan' => 'saya suka rebahan karena berguna untuk mengisi ulang energi yyang telah saya habiskan untuk melakukan kegiatan'
            ],
            [
                'hobi' => 'bermain media sosial',
                'alasan' => 'saya sering meng-eksplore berbagai media sosial untuk sekedar mencari hiburan ataupun mencari informasi terbaru'
            ]
            ]);
    }
}
