<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Developer;
use App\Models\Sale;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSalesDeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        Admin::updateOrCreate(
            ['email' => 'demo@mail.com'],
            [
                'name' => 'Admin Demo',
                'password' => Hash::make('12345678'),
            ]
        );

        // Sales
        Sale::updateOrCreate(
            ['email' => 'demo@mail.com'],
            [
                'name' => 'Sales Demo',
                'password' => Hash::make('12345678'),
            ]
        );

        // Developer
        Developer::updateOrCreate(
            ['email' => 'demo@mail.com'],
            [
                'name' => 'Developer Demo',
                'designation' => 'Developer',
                'password' => Hash::make('12345678'),
            ]
        );
    }
}
