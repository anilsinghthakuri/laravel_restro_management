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

        DB::table('tables')->insert([
            'table_name'=>'table1',

        ]);
        DB::table('tables')->insert([
            'table_name'=>'table2',

        ]);
        DB::table('tables')->insert([
            'table_name'=>'table3',

        ]);

        DB::table('products')->insert([
            'product_name'=>'chickenMOMO',
            'product_price' => 200,
            'product_image' => 'food1.jpg',
            'category_id' => 1,
        ]);
        DB::table('products')->insert([
            'product_name'=>'steemMOMO',
            'product_price' => 100,
            'product_image' => 'food2.jpg',
            'category_id' => 1,
        ]);
    }
}
