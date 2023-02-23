<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();


//        Product::factory()->count(5)->create();
        $this->call(ProductTableSeeder::class);

        $this->call(UserTableSeeder::class);

        $this->call(AdminsTableSeeder::class);

//         \App\Models\User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//             'password' => bcrypt('123456')
//         ]);
    }
}
