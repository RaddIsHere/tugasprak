<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshelfSeeder extends Seeder
{
    /**
     * NPM : 55201 | Angkatan : 23 | No : 007
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('bookshelf')->insert([
                'code' => 'RAK-' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'name' => 'Rak ' . chr(64 + $i) . ' - Lantai ' . ceil($i / 3),
            ]);
        }
    }
}