<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@example.com'], // الشرط: لو الإيميل ده موجود يعدله، لو مش موجود ينشئه
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password123'), // كلمة السر
                'user_type' => 'admin', // هنا بيتسجل كأدمن
            ]
        );
        
    }
}
