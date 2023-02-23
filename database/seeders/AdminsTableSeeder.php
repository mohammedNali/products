<?php

namespace Database\Seeders;
use App\Models\Admin;
//use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        $faker = Faker::create();

        Admin::create([
//            'name' => $faker->name,
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
