<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\preglediController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\HomeController;

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


Route::get('home', [HomeController::class, 'index']);

Route::get('/informacije', function () {
    return view('o-nama');
});
Route::get('/djelatnosti', function () {
    return view('djelatnosti');
});



Route::get('/pregledi', function () {
    return view('pregledi');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('add-news-form', [NewsController::class, 'index']);
Route::post('store-form1', [NewsController::class, 'store']);

Route::get('pregledi', [preglediController::class, 'index']);
Route::post('store-form2', [preglediController::class, 'store']);

Route::get('profil', [ProfilController::class, 'index']);