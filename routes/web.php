<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Http\Controllers\AgentController;
=======
use App\Http\Controllers\livrecontrolleur;


use App\Http\Controllers\playerController;

use App\Http\Controllers\VoitureController;
>>>>>>> bbb982687cc7292b6fcf0a6e2006d7a4b66c6b68

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

Route::get('/', function () {return view('welcome');});

Route::get('/livre',[livrecontrolleur::class,'index'])->name('livre');
Route::get('/new_livre', function(){return view('new_livre');})->name('new_livre');

Route::post('/store_livre',[livrecontrolleur::class,'store'])->name('store_livre');
Route::get('/edit_livre/{id}',[livrecontrolleur::class,'edit'])->name('edit_livre');
Route::POST('/update_livre',[livrecontrolleur::class,'update'])->name('update_livre');
Route::get('/delete_livre/{id}',[livrecontrolleur::class,'delete'])->name('delete_livre');
Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/master', function () {
    return view('master');
});
Route::get('/new_agent', function () {
    return view('new_agent');
})->name('new_agent');



Route::post('/store_agent', [ AgentController::class,'store' ])->name('store_agent');
Route::get('/agents', [ AgentController::class,'index'])->name('agents');
Route::get('/edit_agent/{id}', [ AgentController::class,'edit'])->name('edit_agent');
Route::post('/update_agent', [ AgentController::class,'update'])->name('update_agent');
Route::get('/delete_agent/{id}', [ AgentController::class,'destroy'])->name('delete_agent');
=======
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

Route::name('index')->get('/player', [playerController::class, 'index']);

Route::name('store_player')->post('store_player',[playerController::class, 'store_player']);

Route::name('edit_player')->get('/edit_player/{id}', [playerController::class, 'edit_player']);

Route::name('update_player')->post('update_player',[playerController::class, 'update_player']);

Route::name('destroy_player')->get('/destroy_player/{id}', [playerController::class, 'destroy_player']);
>>>>>>> bbb982687cc7292b6fcf0a6e2006d7a4b66c6b68

