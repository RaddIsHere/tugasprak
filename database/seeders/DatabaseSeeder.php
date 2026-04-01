<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * NPM : 55201 | Angkatan : 23 | No : 007
     */
    public function run(): void
    {
        $this->call([
            BookshelfSeeder::class,
            UserSeeder::class,
            BookSeeder::class,
        ]);
    }
}
 