<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


use App\Http\Controllers\Volcontroller;

Use App\Http\Controllers\ProduitCotroller;

use App\Http\Controllers\AgentController;

use App\Http\Controllers\livrecontrolleur;


use App\Http\Controllers\PlayerController;

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

Route::get('/', function () {return view('welcome');});

Route::get('/livre',[livrecontrolleur::class,'index'])->name('livre');
Route::get('/new_livre', function(){return view('new_livre');})->name('livre.new');

Route::post('/store_livre',[livrecontrolleur::class,'store'])->name('livre.store');
Route::get('/edit_livre/{id}',[livrecontrolleur::class,'edit'])->name('livre.edit');
Route::POST('/update_livre',[livrecontrolleur::class,'update'])->name('livre.update');
Route::get('/delete_livre/{id}',[livrecontrolleur::class,'delete'])->name('livre.delete');

Route::get('/vol',[Volcontroller::class ,'index'])->name('vol');

Route::get('/new_vol', function () { 
    return view('new_vol');

})->name('new_vol');

Route::post('/store_vol',[Volcontroller::class ,'store'])->name('store_vol');
Route::get('/edit_vol/{id}',[Volcontroller::class ,'edit'])->name('edit_vol');
Route::post('/update_vol',[Volcontroller::class ,'update'])->name('update_vol');
Route::get('/destroy_vol/{id}',[Volcontroller::class ,'destroy'])->name('destroy_vol');

Route::get('/new_agent', function () {
    return view('new_agent');
})->name('new_agent');
Route::post('/agent/store', 'AgentController@store')->name('agent.store');
Route::get('/agent/index', 'AgentController@index')->name('agent.index');
Route::get('/agent/edit/{id}', 'AgentController@edit')->name('agent.edit');
Route::post('/agent/update', 'AgentController@update')->name('agent.update');
Route::get('/agent/delete/{id}', 'AgentController@destroy')->name('agent.delete');

    
Route::get('/new-voiture', function(){
    return view('new_voiture');;
})->name('voitures'); 
Route::get('/voiture',[VoitureController::class,'index'])->name('voiture.index');
Route::post('/voiture/store/',[VoitureController::class,'store'])->name('voiture.store');
Route::get('/voiture/edit/{id}',[VoitureController::class,'edit'])->name('voiture.edit');
Route::post('/voiture/update',[VoitureController::class,'update'])->name('voiture.update');
Route::get('/voiture/delete/{id}',[VoitureController::class,'destroy'])->name('voiture.delete');

Route::name('index')->get('/player', [playerController::class, 'index']);
Route::name('store_player')->post('store_player',[playerController::class, 'store']);
Route::name('edit_player')->get('/edit_player/{id}', [playerController::class, 'edit']);
Route::name('update_player')->post('update_player',[playerController::class, 'update']);
Route::name('destroy_player')->get('/destroy_player/{id}', [playerController::class, 'destroy']);


Route::get('/new_produit', function () {
    return view('new_produit');
})->name('new_produit');

Route::get('/produit', [ProduitCotroller::class,'index'])->name('produit');
Route::get('/edit_produit/{id}', [ProduitCotroller::class, 'edit'])->name('edit_produit');

Route::post('/store_produit',[ProduitCotroller::class,'store'])->name('store_produit');
Route::post('/update_produit',[ProduitCotroller::class,'update'])->name('update_produit');
Route::get('/delete_produit/{id}',[ProduitCotroller::class,'destroy'])->name('delete_produit');

Route::get('/new_agent', function () {
    return view('new_agent');
})->name('new_agent');
Route::post('/store_agent', [ AgentController::class,'store' ])->name('store_agent');
Route::get('/agents', [ AgentController::class,'index'])->name('agents');
Route::get('/edit_agent/{id}', [ AgentController::class,'edit'])->name('edit_agent');
Route::post('/update_agent', [ AgentController::class,'update'])->name('update_agent');
Route::get('/delete_agent/{id}', [ AgentController::class,'destroy'])->name('delete_agent');
