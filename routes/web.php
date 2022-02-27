<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AgentController;

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
Route::get('/new_agent', function () {
    return view('new_agent');
})->name('new_agent');



Route::post('/store_agent', [ AgentController::class,'store' ])->name('store_agent');
Route::get('/agents', [ AgentController::class,'index'])->name('agents');
Route::get('/edit_agent/{id}', [ AgentController::class,'edit'])->name('edit_agent');
Route::post('/update_agent', [ AgentController::class,'update'])->name('update_agent');
Route::get('/delete_agent/{id}', [ AgentController::class,'destroy'])->name('delete_agent');

