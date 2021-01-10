<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('categories')->insert([
            'category_name'=>'momo',

        ]);

        DB::table('products')->insert([
            'product_name'=>'chickenMOMO',
            'product_price' => 200,
            'product_image' => 'food1.jpg',
            'category_id' => 1,
        ]);
    }
}
