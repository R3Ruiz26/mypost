<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
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
            'code' => '001',
        ]);

        DB::table('categories')->insert([
            'name' => 'News',
            'code' => '002',
        ]);

        DB::table('categories')->insert([
            'name' => 'Weather',
            'code' => '003',
        ]);
        DB::table('categories')->insert([
            'name' => 'E-games',
            'code' => '004',
        ]);
        DB::table('categories')->insert([
            'name' => 'Events',
            'code' => '005',
        ]);
    }
}
