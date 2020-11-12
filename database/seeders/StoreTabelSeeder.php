<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StoreTabelSeeder extends Seeder
{
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

    public function generateRandomHome()
    {
        $first_Home = $this->generateRandomString(rand(2, 15));
        $first_Home = strtolower($first_Home);
        $first_Home = ucfirst($first_Home);
        $last_Home = $this->generateRandomString(rand(2, 15));
        $last_Home = strtolower($last_Home);
        $last_Home = ucfirst($last_Home);
        $Home = $first_Home . " " . $last_Home;
        return $Home;
    }

    public function generateRandomceo()
    {
        $first_ceo = $this->generateRandomString(rand(2, 15));
        $first_ceo = strtolower($first_ceo);
        $first_ceo = ucfirst($first_ceo);
        $last_ceo = $this->generateRandomString(rand(2, 15));
        $last_ceo = strtolower($last_ceo);
        $last_ceo = ucfirst($last_ceo);
        $ceo = $first_ceo . " " . $last_ceo;
        return $ceo;
    }
    public function run()
    {
        DB::table('set')->insert([
            'name' => "雷蛇",
            'home' => "台南xxx",
            'phone' => "0912345689",
            'ceo' => "陳xx"
        ]);
        DB::table('set')->insert([
            'name' => "雷蛇",
            'home' => "台中xxx",
            'phone' => "09123896452",
            'ceo' => "王xx"
        ]);
        for ($i = 0; $i < 30; $i++) {
            $name = $this->generateRandomName();
            $Home = $this->generateRandomHome();
            $ceo= $this->generateRandomceo();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
            DB::table('store')->insert
            ([
                'name' => $name,
                'home' => $Home,
                'ceo' => $ceo,
                'phone' => rand(9000000,9999999),
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
