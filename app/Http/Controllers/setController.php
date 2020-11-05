<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\set;
use Carbon\Carbon;
class setController extends Controller
{
    public function index()
    {
        $set = set::where('price', '>', 178)->first()->toArray();

        return view('players.index', $set);
    }
    public function create()
    {
        $set = set::create([
            'name'=>"光學遊戲滑鼠 G90",
            'category'=>"1",
            'Brand'=>"羅技",
            'price'=>"500",
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()]);

        return view('set.create', $set->toArray());
    }
    public function edit($id)
    {
        if ($id == 5)
        {
            $set_name = "遊戲滑鼠";
            $set_Brand = "羅技";
            $set_price = "800";
        } else {
            $set_name = "滑鼠";
            $set_Brand = "雷蛇";
            $set_price = "1000";
        }
        $data = compact('set_name', 'set_Brand', 'set_price');

        return view('set.edit', $data);
    }
    public function show($id)
    {
        $temp = set::where('position', '小前鋒')->first();
        if ($temp == null)
            return "No record";

        $set = $temp->toArray();

        return view('set.show', $set);
    }
}
