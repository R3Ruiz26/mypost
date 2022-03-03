<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Sports',
            'id' => '001',
            'status'=> 1,
        ]);

        DB::table('categories')->insert([
            'name' => 'News',
            'id' => '002',
            'status'=> 1,
        ]);

        DB::table('categories')->insert([
            'name' => 'Weather',
            'id' => '003',
            'status'=> 1,
        ]);
        DB::table('categories')->insert([
            'name' => 'E-games',
            'id' => '004',
            'status'=> 1,
        ]);
        DB::table('categories')->insert([
            'name' => 'Events',
            'id' => '005',
            'status'=> 1,
        ]);
    }
}
