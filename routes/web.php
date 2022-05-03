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

Route::get('/auth', function() {
    return view('auth/index');
});

// laravel8ではControllerのクラスをuseする必要あり
Route::resource('/articles/index', ArticleController::class)->only([
    'index', 'show'
]);
