<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Todo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create(
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
                'remember_token' => Str::random(10),
                'is_admin' => true
            ]
        );
        User::create(
            [
                'name' => 'Annisa Qurrota Ayun',
                'email' => 'annisa.qurrota.ft20@mail.umy.ac.id',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
                'remember_token' => Str::random(10),
                'is_admin' => false
            ]
        );
        User::factory(100)->create();
        Todo::factory(500)->create();
    }
}
