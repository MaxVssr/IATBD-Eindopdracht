<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Person',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('laravel'),
            'role' => 'Admin'
        ]);

        DB::table('users')->insert([
            'name' => 'Person2',
            'email' => 'person2@gmail.com',
            'password' => bcrypt('laravel'),
        ]);

        DB::table('users')->insert([
            'name' => 'Person3',
            'email' => 'person3@gmail.com',
            'password' => bcrypt('laravel'),
        ]);
    }
}
