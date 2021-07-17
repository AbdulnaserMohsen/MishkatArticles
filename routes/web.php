<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
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

Route::get('/',[ArticleController::class, 'index'])->name('index');
Route::get('/details/{id}',[ArticleController::class, 'details'])->name('details');
Route::post('/',[ArticleController::class, 'article_filtering'])->name('article_filtering');

Auth::routes();

//visitors
Route::group(['middleware' => 'auth', 'prefix' => 'visitor'], function () {
    Route::post('/add_comment/{id}',[UserController::class, 'add_comment'])->name('add_comment');
});

//admin
Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('dashboard');

    //categories
    Route::get('/categories',[CategoryController::class, 'categories'])->name('categories');
    Route::post('/add_category', [CategoryController::class, 'add_category'])->name('add_category');
    Route::post('/update_category/{id}', [CategoryController::class, 'update_category'])->name('update_category');
    Route::get('/delete_category/{id}', [CategoryController::class, 'delete_category'])->name('delete_category');

    //articles
    Route::get('/articles',[ArticleController::class, 'articles'])->name('articles');
    Route::post('/add_article', [ArticleController::class, 'add_article'])->name('add_article');
    Route::post('/update_article/{id}', [ArticleController::class, 'update_article'])->name('update_article');
    Route::get('/delete_article/{id}', [ArticleController::class, 'delete_article'])->name('delete_article');

});


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
