<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TranslationController;
use App\Http\Controllers\Admin\SpectacleController;

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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

// Admin
Route::prefix('admin')->as('admin.')->middleware('auth')->group(function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');

    // Categories
    Route::delete('categories/multi-destroy', [CategoryController::class, 'massDestroy'])->name('categories.multi_destroy');
    Route::resource('categories', 'Admin\CategoryController');

    // Spectacles
    Route::delete('spectacles/multi-destroy', [SpectacleController::class, 'massDestroy'])->name('spectacles.multi_destroy');
    Route::post('spectacles/media', [SpectacleController::class, 'storeMedia'])->name('spectacles.store_media');
    Route::resource('spectacles', 'Admin\SpectacleController');

    // Translations
    Route::get('translations', [TranslationController::class, 'edit'])->name('translations.edit');
    Route::put('translations', [TranslationController::class, 'update'])->name('translations.update');

    // Change password
    Route::get('password', [ChangePasswordController::class, 'edit'])->name('password.edit');
    Route::post('password', [ChangePasswordController::class, 'update'])->name('password.update');
});
