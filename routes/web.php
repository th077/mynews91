<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProfileController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::group(['prefix' => 'admin'], function() {
    //NEWS
    Route::get('news/create', [NewsController::class, 'add'])->middleware('auth');
    Route::post('news/create', [NewsController::class, 'create'])->middleware('auth')->name('admin.news.create');
    //Profile
    Route::get('profile/create', [ProfileController::class, 'add'])->middleware('auth');
    Route::get('profile/edit', [ProfileController::class, 'edit'])->middleware('auth');
});

use App\Http\Controllers\NewsController as PublicNewsController;
Route::get('/', [PublicNewsController::class, 'index'])->name('news.index');

/*
// news
Route::controller(NewsController::class)->prefix('admin')->group(function() {
    Route::get('news/create', 'add');
});

// profile
Route::controller(ProfileController::class)->prefix('admin')->group(function() {
    Route::get('profile/create', 'add');
    Route::get('profile/edit', 'edit');
});
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
