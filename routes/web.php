<?php

use App\Models\Produk;
use App\Models\Kecamatan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\UserProductController;

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


Route::get('/detail_produk/{id}', [UserProductController::class, 'detail_produk']);
Route::get('/', [UserProductController::class, 'index']);
Route::get('/about', [UserProductController::class, 'about']);
Route::get('/semua_produk', [UserProductController::class, 'semua']);

Route::get('/user_login', [UserController::class, 'index'])->name('login');
Route::get('/user_register', [UserController::class, 'register']);
Route::post('/user_register', [UserController::class, 'store']);
Route::post('/auth', [UserController::class, 'auth']);
Route::post('/logout', [UserController::class, 'logout']);

Route::get('/dashboard_admin', function () {
    return view('dashboard.index', [
        'produk' => Produk::all(),
        'kecamatan' => Kecamatan::all(),
        'sudah_legalitas' => Produk::all()->where('legalitas', 'sudah'),
        'belum_legalitas' => Produk::all()->where('legalitas', 'belum'),
    ]);
})->middleware('auth');

Route::resource('/produk', ProdukController::class);

Route::resource('/kecamatan', KecamatanController::class);