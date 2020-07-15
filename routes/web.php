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
    Route::get('/create', 'NewsController@newsCreatePage')->name('news.createPage');
    Route::post('/create/submit', 'NewsController@newsCreate')->name('news.create');
    Route::get('/{news}', 'NewsController@singleNews')->name('singleNews');
    Route::get('/{news}/edit', 'NewsController@NewsEdit')->name('news.edit');
    Route::get('/{news}/delete', 'NewsController@NewsDelete')->name('news.delete');
    Route::put('/{news}/edit/submit', 'NewsController@editSubmit')->name('news.editSubmit');

});

Route::group(['prefix' => 'category'], function () {
    Route::get('/', 'CategoryController@categories')->name('categories.show');
    Route::get('/add/add', 'CategoryController@addCategory')->name('categories.add');
    Route::put('/add/add/submit', 'CategoryController@addCatSubmit')->name('categories.addSubmit');
    Route::get('/{cat}/edit', 'CategoryController@editCat')->name('categories.edit');
    Route::put('/{cat}/edit/submit', 'CategoryController@editCatSubmit')->name('categories.editSubmit');
    Route::get('/{cat}/delete', 'CategoryController@deleteCat')->name('categories.delete');
    Route::get('/{cat}', 'CategoryController@singleCat')->name('singleCat');
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/auth', 'UserController@auth')->name('auth');
    Route::get('/feedback', 'UserController@feedback')->name('feedback');
    Route::post('/feedback/submit', 'UserController@feedbackSubmit')->name('feedbackSubmit');
    Route::get('/unload', 'UserController@unloadData')->name('unload');
    Route::post('/unload/submit', 'UserController@unloadSubmit')->name('unloadSubmit');
});


Route::get('/', 'NewsController@index')->name('greetings');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
