<?php

namespace App\Http\Controllers;

use App\Models\set;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SetController extends Controller
{
    public function index()
    {
        $set = set::where('price', '>', 100)->first()->toArray();

        return view('set.index', $set);
    }
    public function create()
    {
        $set = set::create([
            'name'=>"光學遊戲滑鼠 G90",
            'class'=>"滑鼠",
            'line'=>"有線",
            'price'=>"500",
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()]);

        return view('set.create', $set->toArray());
    }
    public function edit($id)
    {
        if ($id == 5)
        {
            $set_name = "滑鼠a";
            $set_class="滑鼠";
            $set_price = "800";
        } else {
            $set_name = "滑鼠b";
            $set_class="滑鼠";
            $set_price = "1000";
        }
        $data = compact('set_name', 'set_class', 'set_price');

        return view('set.edit', $data);
    }
    public function show($id)
    {
        $temp = set::findOrfail($id);

        $set = $temp->toArray();

        return view('set.show', $set);
    }
}
