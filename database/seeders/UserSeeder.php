<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * NPM : 55201 | Angkatan : 23 | No : 007
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // ⭐ Data ke-1: Identitas sendiri
        // NPM: 55201 | Angkatan: 23 | No: 007
        DB::table('users')->insert([
            'npm'               => 5520123007,
            'username'          => 'mahasiswa_55201',
            'first_name'        => 'Mahasiswa',
            'last_name'         => 'NIM55201',
            'email'             => 'npm55201@student.ac.id',
            'email_verified_at' => now(),
            'password'          => Hash::make('password123'),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);

        // 49 data acak lainnya
        for ($i = 8; $i <= 56; $i++) {
            DB::table('users')->insert([
                'npm'               => (int)('5520123' . str_pad($i, 3, '0', STR_PAD_LEFT)),
                'username'          => $faker->unique()->userName(),
                'first_name'        => $faker->firstName(),
                'last_name'         => $faker->lastName(),
                'email'             => $faker->unique()->safeEmail(),
                'email_verified_at' => $faker->optional(0.8)->dateTimeBetween('-1 year', 'now'),
                'password'          => Hash::make('password123'),
                'created_at'        => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at'        => now(),
            ]);
        }
    }
}