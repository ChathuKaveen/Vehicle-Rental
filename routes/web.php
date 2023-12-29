<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('brand_new.login');
});

Route::get('/logout',function(){
    Session::forget('user');
    return redirect('/login');
});
Route::get('/signup', function () {
    return view('/brand_new/signup');
});

Route::get('/about',[ProductController::class,'about']);
Route::post('/signup',[UserController::class,'signup']);
Route::get('/vehicle',[ProductController::class,'vehi']);
Route::post('/login',[UserController::class,'login']);
Route::get("/" ,[ProductController::class,'index']);
Route::get("/service",[ProductController::class,'service']);