<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        
        // User::create([
        //     'name' => 'Nafibal',
        //     'email' => 'asdas@gmail.com',
        //     'password' => bcrypt('12345'),
        //     'phoneNumber' => 123123,
        //     'address' => 'jl. kungkingkang'
        // ]);

        // Product::create([
        //     'name' => 'Laptop Asus VivoBook S14 S430UN',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'stock' => 1,
        //     'price' => 8200,
        //     'user' => 'Muh Temo'
        // ]);
        // Product::create([
        //     'name' => 'Kemeja Flanel Merah',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'stock' => 1,
        //     'price' => 50,
        //     'user' => 'Lisa Jane'
        // ]);
        // Product::create([
        //     'name' => 'Blouse Pita Mint',
        //     'category_id' => 3,
        //     'user_id' => 1,
        //     'stock' => 1,
        //     'price' => 25,
        //     'user' => 'Cahya Marica'
        // ]);
        
        Category::create([
            'name' => 'Elektronik',
            'slug' => 'elektronik'
        ]);
        Category::create([
            'name' => 'Pakaian Pria',
            'slug' => 'pakaian-pria'
        ]);
        Category::create([
            'name' => 'Pakaian Wanita',
            'slug' => 'pakaian-wanita'
        ]);

        Product::factory(20)->create();
    }
}
