<?php

use App\Http\Controllers\ArtikelsController;
use App\Http\Controllers\BloodInController;
use App\Http\Controllers\BloodOutController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\HomeArtikelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoragesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index'])->name('index');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/beranda',[HomeAdminController::class,'index'])->name('beranda.index');

Route::get('admin/darah-masuk',[BloodInController::class,'index'])->name('bloodin.index');
Route::post('admin/darah-masuk/store',[BloodInController::class,'store'])->name('bloodin.store');
Route::get('admin/darah-masuk/destroy{id}',[BloodInController::class,'destroy'])->name('bloodin.destroy');


Route::get('admin/darah-keluar',[BloodOutController::class,'index'])->name('bloodout.index');
Route::post('admin/darah-keluar/store',[BloodOutController::class,'store'])->name('bloodout.store');

Route::get('admin/artikel',[ArtikelsController::class,'index'])->name('artikel.index');
Route::post('admin/artikel/post',[ArtikelsController::class,'store'])->name('artikel.store');
Route::get('admin/artikel/destroy{id}',[ArtikelsController::class,'destroy'])->name('artikel.destroy');

Route::get('/stok',[StoragesController::class,'index'])->name('stok.index');

Route::get('artikel/index',[HomeArtikelController::class,'index'])->name('artikel.home.index');
Route::get('artikel/view{id}',[HomeArtikelController::class,'view'])->name('artikel.view');
