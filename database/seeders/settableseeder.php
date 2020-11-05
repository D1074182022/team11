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
        DB::table('set')->insert([
            name=>"光學遊戲滑鼠 G90",
            category=>"1",
            Brand=>"羅技",
            price=>"500"
        ]);
    }
}
