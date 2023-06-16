<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nowDate = now()->timezone('Asia/Jakarta')->format('Y-m-d H:i:s');

        // product_category_id = 1 = album
        ProductCategory::insert([
            'product_category_name' => 'album',
            'created_at' => $nowDate
        ]);

        // product_category_id = 2 = other
        ProductCategory::insert([
            'product_category_name' => 'other',
            'created_at' => $nowDate
        ]);
    }
}
