<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'Kael',
            'email' => 'jaleisme.id@gmail.com',
            'password' => bcrypt('admin'),
            'level' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'level' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'Seller',
            'email' => 'seller@seller.com',
            'password' => bcrypt('seller'),
            'level' => 'seller',
        ]);
        DB::table('users')->insert([
            'name' => 'Customer',
            'email' => 'customer@customer.com',
            'password' => bcrypt('customer'),
            'level' => 'customer',
        ]);
    }
}
