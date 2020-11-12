<?php

namespace App\Http\Controllers;

use App\Models\Set;
use App\Models\Store;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $n = store::where('a', '台灣')->count();

        return $n;
    }
    public function create()
    {
        $store = new store;
        $store -> name= "雷蛇";
        $store -> home= "台北xxx";
        $store -> phone= "09134679";
        $store -> ceo= "王xx";
        $store->save();
        return view( 'store.create');
    }
    public function edit($id)
    {
        $temp=Store::findOrfail($id);
        $temp->name='華碩';
        $temp->save();

        $store= $temp->toArray();

        return view('store.edit')->with([
            'name'=>$store['name'],
            'home'=>$store['home'],
            'phone'=>$store['phone'],
            'ceo'=>$store['ceo']]);
    }
    public function show($id)
    {
        $temp = Store::findOrfail($id);
        $set = $temp->toArray();

        return view('set.show', $set);
    }
}
