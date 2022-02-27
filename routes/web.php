<?php

use App\Http\Controllers\playerController;
use Illuminate\Support\Facades\Route;

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

Route::name('index')->get('/player', [playerController::class, 'index']);

Route::name('store_player')->post('store_player',[playerController::class, 'store_player']);

Route::name('edit_player')->get('/edit_player/{id}', [playerController::class, 'edit_player']);

Route::name('update_player')->post('update_player',[playerController::class, 'update_player']);

Route::name('destroy_player')->get('/destroy_player/{id}', [playerController::class, 'destroy_player']);
