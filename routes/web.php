<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ArticleController;

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
    Route::get('rear/index', [ArticleController::class, 'index']);
    Route::get('rear/create', [ArticleController::class, 'create']);
    Route::post('rear/store', [ArticleController::class, 'store']);
    // Route::get('/manage', function() {
    //     return view('articles.rear.manage');
    // });

    // 記事表示関連
    Route::get('show/{id}', [ArticleController::class, 'show']);
});

