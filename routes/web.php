<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->namespace('Admin')->name('admin.')->prefix('admin')->group(function(){
            Route::get('/', 'HomeController@index')->name('home');
            Route::resource('posts', 'PostController')->parameters([
                'posts' => 'post:slug',
            ]);
            Route::resource('categories', 'CategoryController')->parameters([
                'categories' => 'category:slug',
            ])->except(['show', 'create']); 
});




Route::get("{any?}", function(){
    return view("guests.home");
})->where("any", ".*");


