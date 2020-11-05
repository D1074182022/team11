<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class settableseeder extends Seeder
{
    /**
     * Seed the application's database.
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

    public function generateRandomBrand()
    {
        $Brand = ['羅技', '雷蛇', '小米', '鐵三角', '微星', '海盜船', '華碩'];
        return $Brand[rand(0, count($Brand) - 1)];

    }

    public function run()
    {
        DB::table('set')->insert([
            'name' => "光學遊戲滑鼠 G80",
            'category' => "1",
            'Brand' => "羅技",
            'price' => "600"
        ]);
        DB::table('set')->insert([
            'name' => "光學遊戲滑鼠 G82",
            'category' => "1",
            'Brand' => "羅技",
            'price' => "900"
        ]);
        for ($i = 0; $i < 500; $i++) {
            $name = $this->generateRandomName();
            $Brand = $this->generateRandomBrand();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
            DB::table('set')->insert
            ([
                'name' => $name,
                'category' => rand(1, 8),
                'Brand' => $Brand,
                'price' => rand(100, 10000),
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
