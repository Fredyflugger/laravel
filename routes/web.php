<?php

$text = 'Привет мир!';
$title = 'Моя первая страница';
// use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'news'], function () {
    Route::get('/', 'NewsController@index')->name('news');
    Route::get('/create', 'NewsController@create')->name('news.create');
    Route::get('/{id}/edit', 'NewsController@edit')->where('id', '\d+')->name('news.edit');
    Route::get('/{cat}', 'NewsController@singleCat')->where('cat', '\w+')->name('singleCat');
    Route::get('/{cat}/{news}', 'NewsController@singleNews')->where(['cat' => '\w+', 'news'  => '\w+'])->name('singleNews');

});

Route::get('/', 'UserController@index')->name('greetings');
Route::get('/auth', 'UserController@auth')->name('auth');

