<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Muhammad',
            'email' => 'muhammad@gmail.com',
            'mobile' => '03422754409',
            'password' => Hash::make('123456'),
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
