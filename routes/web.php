<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\listController;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\cartcontroller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\regitsercontroller;
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

Route::get('home',[homecontroller::class,'__invoke']);


Route::get('list',[listcontroller::class,'__invoke']);


Route::get('product',[productcontroller::class,'__invokrt']);


Route::get('cart',[cartcontroller::class,'__invoke']);


Route::get('login',[logincontroller::class,'__invoke']);


Route::get('register',[registercontroller::class,'__invoke']);
