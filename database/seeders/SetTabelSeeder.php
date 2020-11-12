<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SetTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomString($length = 10)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function generateRandomName()
    {
        $first_name = $this->generateRandomString(rand(2, 15));
        $first_name = strtolower($first_name);
        $first_name = ucfirst($first_name);
        $last_name = $this->generateRandomString(rand(2, 15));
        $last_name = strtolower($last_name);
        $last_name = ucfirst($last_name);
        $name = $first_name . " " . $last_name;
        return $name;
    }

    public function generateRandomLine()
    {
        $Line = ['有線','無線'];
        return $Line[rand(0, count($Line) - 1)];
    }

    public function generateRandomClass()
    {
        $Class = ['滑鼠','鍵盤','螢幕','耳機'];
        return $Class[rand(0, count($Class) - 1)];
    }
    public function run()
    {
        DB::table('set')->insert([
            'name' => "光學遊戲滑鼠 G80",
            'class' => "滑鼠",
            'line' => "有線",
            'price' => "600"
        ]);
        DB::table('set')->insert([
            'name' => "光學遊戲滑鼠 G82",
            'class' => "滑鼠",
            'line' => "有線",
            'price' => "900"
        ]);
        for ($i = 0; $i < 30; $i++) {
            $name = $this->generateRandomName();
            $Line = $this->generateRandomLine();
            $Class= $this->generateRandomClass();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
            DB::table('set')->insert
            ([
                'name' => $name,
                'class' => $Class,
                'line' => $Line,
                'price' => rand(100, 10000),
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
