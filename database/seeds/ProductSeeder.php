<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_name' => 'fentanil',
            'product_price' => 5000,
            'category_id' => 1 
        ]);

        DB::table('products')->insert([
            'product_name' => 'kodein',
            'product_price' => 8000,
            'category_id' => 1 
        ]);

        DB::table('products')->insert([
            'product_name' => 'ibuprofen',
            'product_price' => 4000,
            'category_id' => 2 
        ]);

        DB::table('products')->insert([
            'product_name' => 'parasetamol',
            'product_price' => 2000,
            'category_id' => 2 
        ]);

    }
}
