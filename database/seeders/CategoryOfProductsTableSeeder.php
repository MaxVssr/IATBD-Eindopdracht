<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategoryOfProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_of_products_array = ["Boeken", "Games", "Transport", "Tuinieren", "Electronica", "Instrumenten"];

        foreach($category_of_products_array as $category_of_products) {
            DB::table('category_of_products')->insert([
                'category' => $category_of_products
            ]);
        }
    }
}
