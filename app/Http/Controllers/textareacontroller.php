<?php

namespace App\Http\Controllers;

use App\Models\excel;
use Illuminate\Http\Request;

class textareacontroller extends Controller
{
    //text_area
    function text_area(){
        return view('text_area');
    }

    // excel_store
    function excel_store(Request $request){
        $item = excel::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
        ]);

        dd($item);

    }
}