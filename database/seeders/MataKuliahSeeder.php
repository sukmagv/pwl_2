<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matkul')->insert([
            [
                'kode_mk' => 'RTI211001',
                'nama' => 'Pancasila',
                'semester' => '1',
                'sks' => '2',
                'jam' => '2',
                'nilai' => 'B+',
                'dosen' => 'Widaningsih Condrowardhani, S.H., M.H.'
            ],
            [
                'kode_mk' => 'RTI211002',
                'nama' => 'Konsep Teknologi Informasi',
                'semester' => '1',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'B',
                'dosen' => 'Indra Dharma Wijaya, S.T., M.MT.'
            ],
            [
                'kode_mk' => 'RTI211003',
                'nama' => 'Critical Thinking dan Problem Solving',
                'semester' => '1',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'A',
                'dosen' => 'Dwi Puspitasari, S.Kom., M.Kom.'
            ],
            [
                'kode_mk' => 'RTI211004',
                'nama' => 'Matematika 1',
                'semester' => '1',
                'sks' => '3',
                'jam' => '6',
                'nilai' => 'A',
                'dosen' => 'Rudy Ariyanto, S.T., M.Cs.'
            ],
            [
                'kode_mk' => 'RTI211005',
                'nama' => 'Bahasa Inggris 1',
                'semester' => '1',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'B+',
                'dosen' => 'Farida Ulfa, S.Pd., M.Pd.'
            ],
            [
                'kode_mk' => 'RTI211006',
                'nama' => 'Dasar Pemrograman',
                'semester' => '1',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'A',
                'dosen' => 'Mamluatul Haniah, S.Kom., M.Kom.'
            ],
            [
                'kode_mk' => 'RTI211007',
                'nama' => 'Praktikum Dasar Pemrograman',
                'semester' => '1',
                'sks' => '3',
                'jam' => '6',
                'nilai' => 'A',
                'dosen' => 'Mamluatul Haniah, S.Kom., M.Kom.'
            ],
            [
                'kode_mk' => 'RTI211008',
                'nama' => 'Keselamatan dan Kesehatan Kerja',
                'semester' => '1',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'B+',
                'dosen' => 'Meyti Eka Apriyani S.T., M.T.'
            ],
            [
                'kode_mk' => 'RTI212001',
                'nama' => 'Agama',
                'semester' => '2',
                'sks' => '2',
                'jam' => '2',
                'nilai' => 'A',
                'dosen' => 'Dr. M. Mukhlis Fahruddin, M.S.I.'
            ],
            [
                'kode_mk' => 'RTI212002',
                'nama' => 'Matematika 2',
                'semester' => '2',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'A',
                'dosen' => 'Deasy Sandhya Elya Ikawati, S.Si., M.Si.'
            ],
            [
                'kode_mk' => 'RTI212003',
                'nama' => 'Bahasa Inggris 2',
                'semester' => '2',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'A',
                'dosen' => 'Atiqah Nurul Asri, S.Pd., M.Pd.'
            ],
            [
                'kode_mk' => 'RTI212004',
                'nama' => 'Sistem Operasi',
                'semester' => '2',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'A',
                'dosen' => 'Ika Kusumaning Putri, S.Kom., M.T.'
            ],
            [
                'kode_mk' => 'RTI212005',
                'nama' => 'Rekayasa Perangkat Lunak',
                'semester' => '2',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'B',
                'dosen' => 'Ariadi Retno Tri Hayati Ririd, S.Kom., M.Kom.'
            ],
            [
                'kode_mk' => 'RTI212006',
                'nama' => 'Basis Data',
                'semester' => '2',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'B+',
                'dosen' => 'Elok Nur Hamdana, S.T., M.T.'
            ],
            [
                'kode_mk' => 'RTI212007',
                'nama' => 'Praktikum Basis Data',
                'semester' => '2',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'B+',
                'dosen' => 'Elok Nur Hamdana, S.T., M.T.'
            ],
            [
                'kode_mk' => 'RTI212008',
                'nama' => 'Algoritma dan Struktur Data',
                'semester' => '2',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'B+',
                'dosen' => 'Mungki Astiningrum, S.T., M.Kom.'
            ],
            [
                'kode_mk' => 'RTI212009',
                'nama' => 'Praktikum Algoritma dan Struktur Data',
                'semester' => '2',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'A',
                'dosen' => 'Mungki Astiningrum, S.T., M.Kom.'
            ],
            [
                'kode_mk' => 'RTI212010',
                'nama' => 'Ilmu Komunikasi dan Organisasi',
                'semester' => '2',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'B+',
                'dosen' => 'Robby Anggriawan S.E., M.E.'
            ],
            [
                'kode_mk' => 'RTI213001',
                'nama' => 'Desain Antarmuka',
                'semester' => '3',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'A',
                'dosen' => 'Anugrah Nur Rahmanto, S.Sn., M.Ds.'
            ],
            [
                'kode_mk' => 'RTI213002',
                'nama' => 'Sistem Manajemen Kualitas',
                'semester' => '3',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'B+',
                'dosen' => 'Farida Ulfa, S.Pd., M.Pd.'
            ],
            [
                'kode_mk' => 'RTI213003',
                'nama' => 'Kecerdasan Buatan',
                'semester' => '3',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'A',
                'dosen' => 'Mustika Mentari, S.Kom., M.Kom.'
            ],
            [
                'kode_mk' => 'RTI213004',
                'nama' => 'Desain dan Pemrograman Web',
                'semester' => '3',
                'sks' => '3',
                'jam' => '6',
                'nilai' => 'A',
                'dosen' => 'Dimas Wahyu Wibowo, S.T., M.T.'
            ],
            [
                'kode_mk' => 'RTI213005',
                'nama' => 'Basis Data Lanjut',
                'semester' => '3',
                'sks' => '3',
                'jam' => '6',
                'nilai' => 'B',
                'dosen' => 'Eka Larasati Amalia, S.ST., M.T.'
            ],
            [
                'kode_mk' => 'RTI213006',
                'nama' => 'Matematika 3',
                'semester' => '3',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'A',
                'dosen' => 'Deasy Sandhya Elya Ikawati, S.Si., M.Si.'
            ],
            [
                'kode_mk' => 'RTI213007',
                'nama' => 'Pemrograman Berbasis Objek',
                'semester' => '3',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'A',
                'dosen' => 'Elok Nur Hamdana, S.T., M.T.'
            ],
            [
                'kode_mk' => 'RTI213008',
                'nama' => 'Praktikum Pemrograman Berbasis Objek',
                'semester' => '3',
                'sks' => '3',
                'jam' => '6',
                'nilai' => 'B+',
                'dosen' => 'Elok Nur Hamdana, S.T., M.T.'
            ],
            [
                'kode_mk' => 'RTI214001',
                'nama' => 'Kewarganegaraan',
                'semester' => '4',
                'sks' => '2',
                'jam' => '2',
                'nilai' => '-',
                'dosen' => 'Widaningsih Condrowardhani, S.H., M.H.'
            ],
            [
                'kode_mk' => 'RTI214002',
                'nama' => 'Analisis dan Desain Berorientasi Objek',
                'semester' => '4',
                'sks' => '2',
                'jam' => '4',
                'nilai' => '-',
                'dosen' => 'Ariadi Retno Tri Hayati Ririd, S.Kom., M.Kom.'
            ],
            [
                'kode_mk' => 'RTI214003',
                'nama' => 'Manajemen Proyek',
                'semester' => '4',
                'sks' => '2',
                'jam' => '3',
                'nilai' => '-',
                'dosen' => 'Candra Bella Vista, S.Kom., M.T.'
            ],
            [
                'kode_mk' => 'RTI214004',
                'nama' => 'Proyek 1',
                'semester' => '4',
                'sks' => '3',
                'jam' => '6',
                'nilai' =>'-',
                'dosen' => 'Farid Angga Pribadi, S.Kom., M.Kom.'
            ],
            [
                'kode_mk' => 'RTI214005',
                'nama' => 'Business Intelligence',
                'semester' => '4',
                'sks' => '2',
                'jam' => '4',
                'nilai' => '-',
                'dosen' => 'Endah Septa Sintiya, S.Pd., M.Kom.'
            ],
            [
                'kode_mk' => 'RTI214006',
                'nama' => 'Jaringan Komputer',
                'semester' => '4',
                'sks' => '2',
                'jam' => '4',
                'nilai' => '-',
                'dosen' => 'Kadek Suarjuna Batubulan, S.Kom., M.T.'
            ],
            [
                'kode_mk' => 'RTI214007',
                'nama' => 'Praktikum Jaringan Komputer',
                'semester' => '4',
                'sks' => '2',
                'jam' => '4',
                'nilai' => '-',
                'dosen' => 'Kadek Suarjuna Batubulan, S.Kom., M.T.'
            ],
            [
                'kode_mk' => 'RTI214008',
                'nama' => 'Pemrograman Web Lanjut',
                'semester' => '4',
                'sks' => '3',
                'jam' => '6',
                'nilai' => '-',
                'dosen' => 'Moch. Zawaruddin Abdullah, S.ST., M.Kom.'
            ],
            [
                'kode_mk' => 'RTI214009',
                'nama' => 'Statistik Komputasi',
                'semester' => '4',
                'sks' => '2',
                'jam' => '4',
                'nilai' => '-',
                'dosen' => 'Elok Nur Hamdana, S.T, M.T.'
            ]
        ]);
    }
}
