<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class customerController extends Controller
{
    //user reg start

    function techweb_customer_reg(){
        return view('users.customer_reg');
    }

    // customer_store
    function techweb_customer_store(Request $request){
        customer::insert([
            'customer_id'=>$request->customer_id,
            'org_name'=>$request->org_name,
            'customer_name'=>$request->customer_name,
            'department'=>$request->department,
            'email'=>$request->email,
            'number'=>$request->number,
            'address'=>$request->address,
            'created_at'=>Carbon::now(),
        ]);
        Alert::success('Success', 'Customer Add Successfully');
        return back();
    }



    // oneclick ajax
    function techweb_getcustomerid(Request $request){
        $customer_id = customer::where('customer_id', $request->customer_id)->get();
        print_r($customer_id);
    }

    public function getClient($id)
    {

        $user = customer::where('customer_id',$id)->first();
        return response()->json($user);
    }
}
