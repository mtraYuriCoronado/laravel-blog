<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->name = 'Yuri Coronado';
        $user->email = 'yuri.cp@gmail.com';
        $user->password = bcrypt('12345678');
        $user->email_verified_at = now();
        $user->remember_token = Str::random(10);
        $user->save();

        $user = new User();

        $user->name = 'Diego Juarez';
        $user->email = 'yeyo.jh@gmail.com';
        $user->password = bcrypt('12345678');
        $user->email_verified_at = now();
        $user->remember_token = Str::random(10);
        $user->save();
        
        // Fábrica de datos masivos
        User::factory(10)->create();
    }
}
