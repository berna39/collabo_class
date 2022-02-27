<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\VoitureController;

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
Route::get('/master', function(){
    return view('layouts.master');
    });
Route::get('/new-voiture', function(){
    return view('new_voiture');
})->name('voitures');
    
Route::get('/voiture',[VoitureController::class,'index'])->name('aficher_voiture');
Route::post('/store-voiture',[VoitureController::class,'store'])->name('store-voiture');
Route::get('/edit-voiture/{id}',[VoitureController::class,'edit'])->name('edit-voiture');
Route::post('/update-voiture',[VoitureController::class,'update'])->name('update-voiture');
Route::get('/delete-voiture/{id}',[VoitureController::class,'destroy'])->name('delete-voiture');
