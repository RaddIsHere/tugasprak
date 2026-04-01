<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * NPM : 55201 | Angkatan : 23 | No : 007
     */
    public function run(): void
    {
        $faker        = Faker::create('id_ID');
        $bookshelfIds = DB::table('bookshelf')->pluck('id')->toArray();

        $judulBuku = [
            'Pemrograman Laravel untuk Pemula',
            'Algoritma dan Struktur Data',
            'Basis Data Relasional',
            'Jaringan Komputer Modern',
            'Kecerdasan Buatan dan Machine Learning',
            'Pemrograman Berorientasi Objek',
            'Sistem Operasi Terapan',
            'Keamanan Sistem Informasi',
            'Rekayasa Perangkat Lunak',
            'Pemrograman Web dengan PHP',
            'Framework JavaScript Modern',
            'Mobile Programming Android',
            'Cloud Computing Fundamentals',
            'Data Science dengan Python',
            'Matematika Diskrit',
            'Kalkulus untuk Teknik',
            'Statistika dan Probabilitas',
            'Aljabar Linear Terapan',
            'Fisika Dasar I',
            'Fisika Dasar II',
            'Kimia Organik',
            'Biologi Molekuler',
            'Sejarah Indonesia Modern',
            'Sastra Indonesia Klasik',
            'Pengantar Ilmu Ekonomi',
            'Manajemen Keuangan',
            'Hukum Perdata',
            'Psikologi Umum',
            'Filsafat Ilmu',
            'Metodologi Penelitian',
            'Penulisan Karya Ilmiah',
            'Etika Profesi',
            'Kewirausahaan Digital',
            'Manajemen Proyek IT',
            'Sistem Informasi Manajemen',
            'E-Commerce dan Bisnis Digital',
            'Big Data Analytics',
            'Internet of Things',
            'Robotika dan Otomasi',
            'Pengolahan Citra Digital',
            'Grafika Komputer',
            'Interaksi Manusia Komputer',
            'Kompilasi dan Bahasa Formal',
            'Teori Graf',
            'Pemrograman Paralel',
            'Sistem Terdistribusi',
            'Virtualisasi dan Kontainerisasi',
            'DevOps dan CI/CD',
            'Pengujian Perangkat Lunak',
            'Arsitektur Mikroservis',
        ];

        foreach ($judulBuku as $index => $judul) {
            DB::table('books')->insert([
                'title'        => $judul,
                'author'       => $faker->name(),
                'year'         => $faker->numberBetween(2010, 2024),
                'city'         => $faker->randomElement([
                    'Jakarta', 'Bandung', 'Yogyakarta', 'Surabaya',
                    'Semarang', 'Malang', 'Medan', 'Makassar',
                ]),
                'cover'        => 'covers/book_' . ($index + 1) . '.jpg',
                'bookshelf_id' => $faker->randomElement($bookshelfIds),
                'created_at'   => $faker->dateTimeBetween('-2 years', 'now'),
                'updated_at'   => now(),
            ]);
        }
    }
}