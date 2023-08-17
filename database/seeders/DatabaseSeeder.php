<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kamar;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'pengguna' => 'Algazali',
            'alamat' => 'Maros',
            'email' => 'alfaidaramirjr@gmail.com',
            'pekerjaan' => 'Web Developer',
            'password' => bcrypt('password'),
            'is_admin' => 1
        ]);
        User::factory(3)->create();



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Kamar::factory(5)->create();
    }
}
