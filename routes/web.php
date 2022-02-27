<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
Use App\Http\Controllers\ProduitCotroller;

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

Route::get('/new_produit', function () {
    return view('new_produit');
})->name('new_produit');

Route::get('/produit', [ProduitCotroller::class,'index'])->name('produit');
Route::get('/edit_produit/{id}', [ProduitCotroller::class, 'edit'])->name('edit_produit');

Route::post('/store_produit',[ProduitCotroller::class,'store'])->name('store_produit');
Route::post('/update_produit',[ProduitCotroller::class,'update'])->name('update_produit');
Route::get('/delete_produit/{id}',[ProduitCotroller::class,'destroy'])->name('delete_produit');
