<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CatGenController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {
    return view('index');
});

// laravel8ではControllerのクラスをuseする必要あり
Route::prefix('articles/')->group(function () {
    // 記事編集関連
    Route::get('index', [ArticleController::class, 'index'])->name('articles/index');
    Route::get('create', [ArticleController::class, 'create'])->name('articles/create');
    Route::get('create', [ArticleController::class, 'showGenres'])->name('articles/create');
    Route::post('store', [ArticleController::class, 'store'])->name('articles/store');
    Route::get('edit/{id}', [ArticleController::class, 'edit'])->name('articles/edit');
    Route::post('update/{id}', [ArticleController::class, 'update'])->name('articles/update');
    Route::post('destroy/{id}', [ArticleController::class, 'destroy'])->name('articles/destroy');
});
// 記事表示関連
Route::get('show/{id}', [ArticleController::class, 'show'])->name('show');

// ckeditorの画像アップロード用
Route::post('ckeditor/images', 'UploadImageController@upload')->name('ckeditor/images');

// カテゴリ・ジャンル関連
Route::prefix('cg/')->group(function () {
    Route::get('index', [CatGenController::class, 'index'])->name('cg/index');
    Route::get('create', [CatGenController::class, 'create'])->name('cg/create');
    Route::post('store', [CatGenController::class, 'store'])->name('cg/store');
    Route::post('store', [CatGenController::class, 'store'])->name('cg/store');
    // Route::get('edit/{id}', [CatGenController::class, 'edit'])->name('cg/edit');
    // Route::post('update/{id}', [CatGenController::class, 'update'])->name('cg/update');
    Route::post('destroy/{id}', [CatGenController::class, 'destroy'])->name('cg/destroy');
});




