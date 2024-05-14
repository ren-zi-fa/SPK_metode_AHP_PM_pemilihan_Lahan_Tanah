<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// useless routes
// Just to demo sidebar dropdown links active states.
Route::get('/buttons/text', function () {
    return view('buttons-showcase.text');
})->middleware(['auth'])->name('buttons.text');

Route::get('/buttons/icon', function () {
    return view('buttons-showcase.icon');
})->middleware(['auth'])->name('buttons.icon');

Route::resource('tanah/search', SearchController::class, [
    'only' => ['index', 'store', 'show', 'destroy']
])->middleware(['auth']); 
Route::resource('tanah/rekomendasi', RekomendasiController::class, [
    'only' => ['index', 'store', 'destroy']
])->middleware(['auth']); 
// rekomendasi hasil
Route::post('tanah/rekomendasi/hasil', [RekomendasiController::class, 'hasil'])->name('rekomendasi.hasil');
Route::get('tanah/rekomendasi/hasil', [RekomendasiController::class, 'hasil_index'])->name('rekomendasi.hasil.index');

require __DIR__ . '/auth.php';
