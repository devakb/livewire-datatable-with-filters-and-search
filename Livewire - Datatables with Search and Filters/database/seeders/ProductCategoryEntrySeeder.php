<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategoryEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::create([
            'category_name' => 'Toys',
        ]);

        ProductCategory::create([
            'category_name' => 'Gadgets',
        ]);
    }
}
