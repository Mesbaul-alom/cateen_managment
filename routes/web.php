<?php

use App\Http\Controllers\customerController;
use App\Http\Controllers\foodController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\textareacontroller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductAjaxController;
use App\Http\Controllers\regController;
use App\Http\Controllers\userRegController;
use App\Http\Controllers\usersViewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::post('/reg', [regController::class, 'reg'])->name('reg');


//  users view
// Route::get('/', [HomeController::class, 'techweb_dashboard'])->name('dashboard');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('is_admin');
Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/seller/home', [HomeController::class, 'sellerHome'])->name('seller.home')->middleware('is_admin');

Route::get('/text/area', [textareacontroller::class, 'text_area'])->name('text.area');
Route::post('/excel/store', [foodController::class, 'excel_store'])->name('excel.store');




// ==============================
            //meal plan
// ==============================

// food variant view
Route::get('/food/variant', [foodController::class, 'food_variant'])->name('food.variant');
// food variant store
Route::post('/food/variant/store', [foodController::class, 'food_variant_store'])->name('food.variant.store');
// food variant delete
Route::get('/variant/delete{id}', [foodController::class, 'variant_delete'])->name('variant.delete');
// food variant edit view
Route::get('/variant/edit{id}', [foodController::class, 'variant_edit'])->name('variant.edit');
// food variant update
Route::post('/food/variant/uplode', [foodController::class, 'food_variant_uplode'])->name('food.variant.uplode');

// menu
Route::get('/food/manu', [foodController::class, 'food_manu'])->name('food.manu');
Route::post('/food/manu/store', [foodController::class, 'food_manu_store'])->name('food.manu.store');
Route::post('/food/menu/update', [foodController::class, 'food_menu_update'])->name('food.menu.update');
Route::get('/manu/edit{id}', [foodController::class, 'manu_edit'])->name('manu.edit');
Route::get('/manu/delete{id}', [foodController::class, 'manu_delete'])->name('manu.delete');


// day
Route::get('/day', [foodController::class, 'day'])->name('day');
Route::post('/day/store', [foodController::class, 'day_store'])->name('day.store');


// ==============================
    // menu.route start
// ==============================

// menu deatails view
Route::get('/menu/details', [foodController::class, 'menu_details'])->name('menu.details');
//menu deatails store
Route::post('/menu/details/store', [foodController::class, 'menu_details_store'])->name('menu.details.store');
Route::get('/details/delete{id}', [foodController::class, 'details_delete'])->name('details.delete');
Route::post('/manu/details/edit', [foodController::class, 'manu_details_edit'])->name('manu.details.edit');

Route::get('/details/edit/{id}', [foodController::class, 'details_edit'])->name('details.edit');
Route::post('/menu/details/update', [foodController::class, 'menu_details_update'])->name('menu.details.update');
// menu.route end////////


// ==========================
    // Food Plan start
// ==========================


// food plan view
Route::get('/food/plan', [foodController::class, 'techweb_food_plan'])->name('food.plan');
// food plan store
Route::post('/food/plan/store', [foodController::class, 'techweb_food_plan_store'])->name('food.plan.store');
// food plan edit
Route::get('/food/plan/edit/{id}', [foodController::class, 'techweb_food_plan_edit'])->name('food.plan.edit');
// food plan update
Route::post('/food/plan/update', [foodController::class, 'techweb_food_plan_update'])->name('food.plan.update');


// ==========================
    // Food Plan end
// ==========================


// ==========================
    // User Register start
// ==========================

// customer reg view
Route::get('/customer/reg', [customerController::class, 'techweb_customer_reg'])->name('customer.reg');
// customer reg store
Route::post('/customer/store', [customerController::class, 'techweb_customer_store'])->name('customer.store');
Route::get('/get-client/{id}', [customerController::class, 'getClient'])->name('get.client');

// customer id onclick ajax
Route::post('/getcustomerid', [customerController::class, 'techweb_getcustomerid']);

// ==========================
    // User Register start
// ==========================
