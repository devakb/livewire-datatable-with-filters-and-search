<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'product_name' => "Barbie",
            'description' => "Best doll",
            'product_price' => 200.99,
            'category_id' => 1
        ]);


        Product::create([
            'product_name' => "Google Home",
            'description' => "Home assistant",
            'product_price' => 2500.99,
            'category_id' => 2
        ]);

        Product::create([
            'product_name' => "iPhone",
            'description' => "Apple phone",
            'product_price' => 200.99,
            'category_id' => 2
        ]);

        Product::create([
            'product_name' => "Lego",
            'description' => "Best constructor",
            'product_price' => 500.99,
            'category_id' => 1
        ]);

        Product::create([
            'product_name' => "Macbook Air",
            'description' => "Best Computer",
            'product_price' => 7200.99,
            'category_id' => 2
        ]);

        Product::create([
            'product_name' => "Samsung Galaxy Buds",
            'description' => "Best Earphones",
            'product_price' => 9000.00,
            'category_id' => 2
        ]);
    }
}
