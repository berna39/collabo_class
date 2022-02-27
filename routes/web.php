<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\livrecontrolleur;

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