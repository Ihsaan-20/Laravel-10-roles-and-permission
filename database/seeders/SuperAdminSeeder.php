<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Super Admin User
        $superAdmin = User::create([
            'name' => 'Ihsaan Chandio', 
            'email' => 'ihsaan@example.com',
            'password' => Hash::make('1234')
        ]);
        $superAdmin->assignRole('Super Admin');

        //Admin User
        $admin = User::create([
            'name' => 'Usman Chandio', 
            'email' => 'usman@example.com',
            'password' => Hash::make('1234')
        ]);
        $admin->assignRole('Admin');

        //Manager User
        $manager = User::create([
            'name' => 'Azaan Chandio', 
            'email' => 'azaan@example.com',
            'password' => Hash::make('1234')
        ]);
        $manager->assignRole('Manager');
    }
}