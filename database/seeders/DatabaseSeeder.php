<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create(
            [
                'username' => 'admin',
                'email' => 'admin@teknokrat.ac.id',
                'password' => '1234',
                'name' => 'Admin',
                'is_admin' => true,
            ]
        );

        Category::create(
            [
                'name' => 'Full Stack Developer',
                'slug' => 'programming',
            ]
        );
    }
}