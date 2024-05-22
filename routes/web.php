<?php

use App\Http\Controllers\AHPController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PresetPreferenceController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserMetodePembobotanController;
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

Route::get('auth/{provider}', [SocialiteController::class, 'redirect'])->name('socialite.redirect');
Route::get('auth/{provider}/callback', [SocialiteController::class, 'callback'])->name('socialite.callback');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('account/profile', [ProfileController::class, 'edit'])->name('account.profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::prefix('admin')->middleware(['auth', 'role_ori:Admin'])->group(function () {
    Route::resource('/users', UserController::class);
    Route::resource('/products', ProductController::class);
    Route::resource('/presetpreferences', PresetPreferenceController::class);

    // Route::resource('/ahp', AHPController::class, [
    //     'only' => ['index', 'create', 'store']
    // ]);
    // Route::get('/ahp/{ahp}', [AHPController::class, 'show'])->name('ahp.show');
    // Route::get('/ahp/{ahp}/edit', [AHPController::class, 'edit'])->name('ahp.edit');
    // Route::post('/ahp/{ahp}', [AHPController::class, 'update'])->name('ahp.update');
    // Route::post('/ahp/t/{ahp}', [AHPController::class, 'toggle'])->name('ahp.toggle');
    // Route::delete('/ahp/{ahp}', [AHPController::class, 'destroy'])->name('ahp.destroy');
});

// rekomendasi 
Route::resource('account/myfavorites', FavoriteController::class, [
    'only' => ['index', 'store', 'show', 'destroy']
])->middleware(['auth', 'role_ori:User|Admin']);
Route::prefix('tanah')->middleware(['auth', 'role_ori:User|Admin'])->group(function () {

    Route::resource('/search', SearchController::class, [
        'only' => ['index', 'store', 'show', 'destroy']
    ]);
    Route::resource('/rekomendasi', RekomendasiController::class, [
        'only' => ['index', 'store', 'destroy']
    ]);
    Route::get('/rekomendasi/usepreset/{presetpreference}', [RekomendasiController::class, 'index'])->name('rekomendasi.preset.use');

    Route::get('/rekomendasi/hasil', [RekomendasiController::class, 'hasil_index'])->name('rekomendasi.hasil.index');
    Route::post('/rekomendasi/hasil', [RekomendasiController::class, 'hasil'])->name('rekomendasi.hasil');

    Route::get('/rekomendasi/hasil/{tanah}', [RekomendasiController::class, 'product_detail'])->name('rekomendasi.hasil.product.detail');
    Route::get('/rekomendasi/preset', [RekomendasiController::class, 'list'])->name('rekomendasi.list_preset');
    Route::get('/rekomendasi/preset/{presetpreference}', [RekomendasiController::class, 'presetDetail'])->name('rekomendasi.preset.show');
});

Route::prefix('user/bobot')->middleware(['auth', 'role_ori:User|Admin'])->group(function () {
    // pembobotan ahp
    Route::get('/ahp', [UserMetodePembobotanController::class, 'ahp_index'])->name('user.bobot.ahp.index');
    Route::get('/ahp/create', [UserMetodePembobotanController::class, 'ahp_create'])->name('user.bobot.ahp.create');
    Route::post('/ahp', [UserMetodePembobotanController::class, 'ahp_store'])->name('user.bobot.ahp.store');
    Route::get('/ahp/{ahp}', [UserMetodePembobotanController::class, 'ahp_show'])->name('user.bobot.ahp.show');
    Route::get('/ahp/{ahp}/edit', [UserMetodePembobotanController::class, 'ahp_edit'])->name('user.bobot.ahp.edit');
    Route::post('/ahp/{ahp}', [UserMetodePembobotanController::class, 'ahp_update'])->name('user.bobot.ahp.update');
    Route::post('/ahp/t/{ahp}', [UserMetodePembobotanController::class, 'ahp_toggle'])->name('user.bobot.ahp.toggle');
    Route::delete('/ahp/{ahp}', [UserMetodePembobotanController::class, 'ahp_destroy'])->name('user.bobot.ahp.destroy');
    // Pembobotan Langsung
    Route::get('langsung', [UserMetodePembobotanController::class, 'langsung_index'])->name('user.bobot.langsung.index');
    Route::get('langsung/edit', [UserMetodePembobotanController::class, 'langsung_edit'])->name('user.bobot.langsung.edit');
    Route::post('langsung/edit', [UserMetodePembobotanController::class, 'langsung_update'])->name('user.bobot.langsung.update');
});
require __DIR__ . '/auth.php';
