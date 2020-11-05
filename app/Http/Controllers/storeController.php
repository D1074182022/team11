<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class storeController extends Controller
{
    public function index()
    {
        return view('store.index');
    }
    public  function create()
    {
        return view('store.create');
    }
    public  function edit($id)
    {
        return view('store.edit');
    }
    public  function show($id)
    {
        $data=[];
        if($id == 3){
            $data['name']="不同電訊";
            $data['price']="平價";
            $data['recommend']="平民";
        }else{
            $data['name']="同電訊";
            $data['price']="天價";
            $data['recommend']="jman";
        }
        return view('store.show',$data);
    }
}
