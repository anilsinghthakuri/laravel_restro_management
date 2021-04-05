<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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


        DB::table('users')->insert([
            'name'=>'Admin',
            'email' => 'admin@user.com',
            'password' => Hash::make('1234'),
        ]);
        DB::table('tables')->insert([

            'table_name' => 'table 1',
        ]);
        DB::table('tables')->insert([

            'table_name' => 'table 2',
        ]);
        DB::table('tables')->insert([

            'table_name' => 'table 3',
        ]);
        DB::table('tables')->insert([

            'table_name' => 'table 4',
        ]);

        DB::table('categories')->insert([

            'category_name' => 'Momo',
        ]);

        DB::table('categories')->insert([

            'category_name' => 'Roll',
        ]);
        DB::table('products')->insert([

            'product_name' => 'Egg Roll',
            'product_price' => '175',
            'category_id' => '2',
        ]);
        DB::table('products')->insert([

            'product_name' => 'Steem Momo',
            'product_price' => '120',
            'category_id' => '1',
        ]);

        DB::table('companydatas')->insert([
            'company_name'=>'Dotsoftech',
            'company_address' => 'Dhangadhi kailali',
            'company_number' => '9868706545',
            'company_logo'=>'logo.png',
            'company_currency'=>'RS'
        ]);
        DB::table('payment_methods')->insert([
            'payment_method_name'=>'cash',
        ]);
        DB::table('payment_methods')->insert([
            'payment_method_name'=>'credit',
        ]);
        DB::table('customers')->insert([
            'customer_username'=>'walkin',
            'customer_phone'=>'0000000000',
            'customer_address'=>'xxxxxxxx',
        ]);
    }
}
