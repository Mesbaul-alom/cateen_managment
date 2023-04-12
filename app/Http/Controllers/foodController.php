<?php

namespace App\Http\Controllers;

use App\Models\day;
use App\Models\food_manu;
use App\Models\food_plan;
use App\Models\food_variant;
use App\Models\menu_details;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Datatables;

class foodController extends Controller
{

    // food_variant
    function food_variant(){
        $food_variant = food_variant::all();
        return view('food.food_variant', [
            'food_variant'=>$food_variant,
        ]);
    }

    // food_variant_store
    function food_variant_store(Request $request){
        food_variant::insert([
            'name'=>$request->food_variant,
            'created_at'=>Carbon::now(),
        ]);
        Alert::success('Success', 'Food Variant Add Successfully');
        return back();
    }

    // variant_delete
    function variant_delete($id){
        food_variant::find($id)->delete();

        Alert::error('Delete', 'Food Variant Delete');
        return back();
    }

    // food variant edit
    function variant_edit($id){
        $variant_id = food_variant::find($id);
        return view('food.food_variant_edit', [
            'variant_id'=>$variant_id,
        ]);
    }

    // food_variant_edit
    function food_variant_uplode(Request $request){
        food_variant::find($request->variant_id)->update([
            'name'=>$request->name,
        ]);
        Alert::success('Success', 'Food Variant Edit Successfully');
        return redirect()->route('food.variant');
    }


    // food_manu
    function food_manu(){
        $food_manu = food_manu::all();
        return view('food.food_manu', [
            'food_manu'=>$food_manu,
        ]);
    }

    // food_manu_store
    function food_manu_store(Request $request){
        food_manu::insert([
            'name'=>$request->food_manu,
            'price'=>$request->price,
            'created_at'=>Carbon::now(),
        ]);
        Alert::success('Success', 'Food Manu Add Successfully');
        return back();
    }

    // manu_edit
    function manu_edit($id){
        $menu_id = food_manu::find($id);
        return view('food.food_menu_edit', [
            'menu_id'=>$menu_id,
        ]);
    }

    // food_menu_update
    function food_menu_update(Request $request){

        food_manu::find($request->menu_id)->update([
            'name'=>$request->name,
            'price'=>$request->price,
        ]);
        Alert::success('Success', 'Food  Manu Edit Successfully');
        return redirect()->route('food.manu');
    }

    // manu_delete
    function manu_delete($id){
        food_manu::find($id)->delete();

        Alert::error('Delete', 'Manu Delete');
        return back();
    }



    //day
    function day(){
        $days= day::all();
        return view('food.day', [
            'days'=>$days,
        ]);
    }

    // day_store
    function day_store(Request $request){
        day::insert([
            'day'=>$request->day,
            'created_at'=>Carbon::now(),
        ]);
        Alert::success('Success', 'Day Add Successfully');
        return back();
    }

    // menu_details
    function menu_details(){
        $food_variant = food_variant::all();
        $menus = food_manu::all();
        $days = day::all();
        $menu_details = menu_details::all();
        return view('food.menu_details', [
            'food_variant'=>$food_variant,
            'menus'=>$menus,
            'days'=>$days,
            'menu_details'=>$menu_details,
        ]);
    }

    // menu_details_store
    function menu_details_store(Request $request){
        $request->validate([
            '*'=>'required',
        ]);

        menu_details::insert([
            'food_variant_id'=>$request->variant_id,
            'menu_id'=>$request->menu_id,
            'day_id'=>$request->day_id,
            'created_at'=>Carbon::now(),
        ]);
        Alert::success('Success', 'Day Add Successfully');
        return back();
    }


    // details_delete
    function details_delete($id){
        menu_details::find($id)->delete();

        Alert::error('Delete', 'Manu Details Delete');
        return back();
    }


    // details_edit
    function details_edit($id){
        $food_variant = food_variant::all();
        $menus = food_manu::all();
        $days = day::all();
        $details_info = menu_details::find($id);
        return view('food.menu_details_edit', [
            'details_info'=>$details_info,
            'food_variant'=>$food_variant,
            'menus'=>$menus,
            'days'=>$days,
        ]);
    }


    // menu_details_update
    function menu_details_update(Request $request){

        menu_details::find($request->details_id)->update([
            'food_variant_id'=>$request->variant_id,
            'menu_id'=>$request->menu_id,
            'day_id'=>$request->day_id,
        ]);
        Alert::success('Success', 'Menu Details Update Successfully');
        return redirect()->route('menu.details');
    }

// ==========================
    // Food Plan start
// ==========================


    // food plan view
    function techweb_food_plan(){
        $food_plan = food_plan::all();
        return view('food.plan', [
            'food_plan'=>$food_plan,
        ]);
    }

    // food_plan_store
    function techweb_food_plan_store(Request $request){
        $request->validate([
            '*'=>'required',
        ]);

        food_plan::insert([
            'name'=>$request->name,
            'total_day'=>$request->total_day,
            'created_at'=>Carbon::now(),
        ]);
        return back();
        Alert::success('Success', 'Food Plan Add Successfully');
    }

    // food plan edit
    function techweb_food_plan_edit($id){
        $plan_id = food_plan::find($id);
        return view('food.plan_edit', [
            'plan_id'=>$plan_id,
        ]);
    }

    // food plan update
    function techweb_food_plan_update(Request $request){
        food_plan::find($request->plan_id)->update([
            'name'=>$request->name,
            'total_day'=>$request->total_day,
        ]);
        Alert::success('Success', 'Food Plan Add Successfully');
        return redirect()->route('food.plan');
    }

// ==========================
    // Food Plan end
// ==========================

}