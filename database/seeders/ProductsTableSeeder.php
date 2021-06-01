<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Lord of the Rings Book',
            'owner_email' => "person2@gmail.com",
            'category' => 'Boeken',
            'description' => 'Een zeer mooi boek. Weinig gelezen. Goed verhaal, lekker lang',
            'image' => '/img/book.jpg',
            'status' => 'Beschikbaar',
        ]);

        DB::table('products')->insert([
            'name' => 'The Last of Us PS4',
            'owner_email' => "person3@gmail.com",
            'category' => 'Games',
            'description' => 'Mooie game, goed verhaal. Leipe gameplay',
            'image' => '/img/LastOfUs.jpg',
            'status' => 'Beschikbaar',
        ]);

        DB::table('products')->insert([
            'name' => 'Fender Stratocaster',
            'owner_email' => "person2@gmail.com",
            'category' => 'Instrumenten',
            'description' => 'Mooie gitaar',
            'image' => '/img/fender-strat.jpg',
            'status' => 'Beschikbaar',
        ]);
    }
}
