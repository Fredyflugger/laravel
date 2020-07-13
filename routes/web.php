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
    Route::get('/{news}', 'NewsController@singleNews')->name('singleNews');
    Route::get('/{news}/edit', 'NewsController@NewsEdit')->name('news.edit');
    Route::get('/{news}/delete', 'NewsController@NewsDelete')->name('news.delete');
    Route::get('/{news}/edit/submit', 'NewsController@editSubmit')->name('news.editSubmit');

});

Route::group(['prefix' => 'user'], function () {
    Route::get('/auth', 'UserController@auth')->name('auth');
    Route::get('/feedback', 'UserController@feedback')->name('feedback');
    Route::post('/feedback/submit', 'UserController@feedbackSubmit')->name('feedbackSubmit');
    Route::get('/unload', 'UserController@unloadData')->name('unload');
    Route::post('/unload/submit', 'UserController@unloadSubmit')->name('unloadSubmit');
});

Route::get('/', 'NewsController@index')->name('greetings');
Route::get('/{cat}', 'CategoryController@singleCat')->where('cat', '\w+')->name('singleCat');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
