<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\TranslationController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\Blog\ArticleCategoryController;
use App\Http\Controllers\Admin\Blog\ArticleController;
use App\Http\Controllers\Admin\Workers\WorkerCategoryController;
use App\Http\Controllers\Admin\Workers\WorkerController;
use \App\Http\Controllers\Admin\Spectacles\SpectacleController as AdminSpectacleController;
use \App\Http\Controllers\Admin\Spectacles\CategoryController;

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

Auth::routes(['register' => false]);

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('Front')->group(function () {
    Route::get('/', [HomeController::class, 'redirectToHome']);
    Route::get('home', [HomeController::class, 'index'])->name('front.home');
    Route::resource('spectacles', 'SpectacleController')->only('index', 'show');
    Route::resource('articles', 'ArticleController')->only('index', 'show');
    Route::resource('workers', 'WorkerController')->only('index');
});

// Admin
Route::prefix('admin')->as('admin.')->middleware('auth')->group(function () {
    Route::get('home', [AdminHomeController::class, 'index'])->name('home');

    // SpectacleCategories
    Route::delete('categories/multi-destroy', [CategoryController::class, 'massDestroy'])->name('categories.multi_destroy');
    Route::resource('categories', 'Admin\Spectacles\CategoryController');

    // Spectacles
    Route::delete('spectacles/multi-destroy', [AdminSpectacleController::class, 'massDestroy'])->name('spectacles.multi_destroy');
    Route::post('spectacles/media', [AdminSpectacleController::class, 'storeMedia'])->name('spectacles.store_media');
    Route::resource('spectacles', 'Admin\Spectacles\SpectacleController');

    // Pages
    Route::delete('pages/multi-destroy', [PageController::class, 'massDestroy'])->name('pages.multi_destroy');
    Route::post('pages/media', [PageController::class, 'storeMedia'])->name('pages.store_media');
    Route::resource('pages', 'Admin\PageController');

    // Articles
    Route::delete('articles/multi-destroy', [ArticleController::class, 'massDestroy'])->name('articles.multi_destroy');
    Route::post('articles/media', [ArticleController::class, 'storeMedia'])->name('articles.store_media');
    Route::resource('articles', 'Admin\Blog\ArticleController');

    // ArticleCategories
    Route::delete('article_categories/multi-destroy', [ArticleCategoryController::class, 'massDestroy'])->name('article_categories.multi_destroy');
    Route::resource('article_categories', 'Admin\Blog\ArticleCategoryController');

    // Workers
    Route::delete('workers/multi-destroy', [WorkerController::class, 'massDestroy'])->name('workers.multi_destroy');
    Route::post('workers/media', [WorkerController::class, 'storeMedia'])->name('workers.store_media');
    Route::resource('workers', 'Admin\Workers\WorkerController');

    // WorkerCategories
    Route::delete('worker_categories/multi-destroy', [WorkerCategoryController::class, 'massDestroy'])->name('worker_categories.multi_destroy');
    Route::resource('worker_categories', 'Admin\Workers\WorkerCategoryController');

    // Vars
    Route::resource('vars', 'Admin\VarController')->except('create', 'store', 'destroy');

    // Translations
    Route::get('translations', [TranslationController::class, 'edit'])->name('translations.edit');
    Route::put('translations', [TranslationController::class, 'update'])->name('translations.update');

    // Change password
    Route::get('password', [ChangePasswordController::class, 'edit'])->name('password.edit');
    Route::post('password', [ChangePasswordController::class, 'update'])->name('password.update');
});
