<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Volcontroller;


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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/master', function () {
    return view('master');
});
Route::get('/vol',[Volcontroller::class ,'index'])->name('vol');

Route::get('/new_vol', function () { 
    return view('new_vol');

})->name('new_vol');

Route::post('/store_vol',[Volcontroller::class ,'store'])->name('store_vol');
Route::get('/edit_vol/{id}',[Volcontroller::class ,'edit'])->name('edit_vol');
Route::post('/update_vol',[Volcontroller::class ,'update'])->name('update_vol');
Route::get('/destroy_vol/{id}',[Volcontroller::class ,'destroy'])->name('destroy_vol');





