<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\TranslationController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\Blog\ArticleCategoryController;
use App\Http\Controllers\Admin\Blog\ArticleController;
use App\Http\Controllers\Admin\Workers\WorkerCategoryController;
use App\Http\Controllers\Admin\Workers\WorkerController;
use \App\Http\Controllers\Admin\Spectacles\SpectacleController as AdminSpectacleController;
use \App\Http\Controllers\Admin\Spectacles\CategoryController;
use \App\Http\Controllers\Front\PageController;
use \App\Http\Middleware\LocaleMiddleware;
use \App\Http\Controllers\Front\EmailController;
use \App\Http\Controllers\Admin\AboutController;

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
Route::get('set-locale/{lang}', 'Front\LocaleController@setLocale')->name('set_locate');

Route::prefix(LocaleMiddleware::getLocale())->namespace('Front')->group(function () {
    Route::get('/', [HomeController::class, 'redirectToHome']);
    Route::get('home', [HomeController::class, 'index'])->name('front.home');
    Route::get('pages/{page:slug}', [PageController::class, 'show'])->name('pages.show');
    Route::get('page/contacts', [PageController::class, 'contacts'])->name('pages.contacts');
    Route::get('page/cart', [PageController::class, 'cart'])->name('pages.cart');
    Route::get('page/account', [PageController::class, 'account'])->name('pages.account');
    Route::get('page/about', [PageController::class, 'about'])->name('pages.about');
    Route::resource('spectacles', 'SpectacleController')->only('index', 'show');
    Route::resource('articles', 'ArticleController')->only('index', 'show');
    Route::resource('workers', 'WorkerController')->only('index');
    Route::post('emails/contact', [EmailController::class, 'sendContactForm'])->name('emails.contact');
});

// Admin
Route::prefix('admin')->as('admin.')->middleware('auth')->group(function () {
    Route::get('home', [AdminHomeController::class, 'index'])->name('home');

    // SpectacleCategories
    Route::delete('categories/multi-destroy', [CategoryController::class, 'massDestroy'])->name('categories.multi_destroy');
    Route::resource('categories', 'Admin\Spectacles\CategoryController');

    // Schemas
    Route::resource('schemas', 'Admin\Spectacles\SchemaController')->only('index', 'show', 'edit', 'update');

    // Spectacles
    Route::delete('spectacles/multi-destroy', [AdminSpectacleController::class, 'massDestroy'])->name('spectacles.multi_destroy');
    Route::post('spectacles/media', [AdminSpectacleController::class, 'storeMedia'])->name('spectacles.store_media');
    Route::resource('spectacles', 'Admin\Spectacles\SpectacleController');

    // Pages
    Route::delete('pages/multi-destroy', [AdminPageController::class, 'massDestroy'])->name('pages.multi_destroy');
    Route::post('pages/media', [AdminPageController::class, 'storeMedia'])->name('pages.store_media');
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

    // About
    Route::get('about/edit', [AboutController::class, 'edit'])->name('about.edit');
    Route::put('about/update', [AboutController::class, 'update'])->name('about.update');
    Route::post('about/media', [ArticleController::class, 'storeMedia'])->name('about.store_media');
});
