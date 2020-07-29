<?php

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

// Index
Route::get('/', 'HomePageController@index')->name('news');

// Вывод отдельной новости
Route::group(['prefix' => 'news'], function () {
    Route::get('/{news}', 'HomePageController@singleNews')->name('singleNews');
});

// Вывод новостей по категории
Route::group(['prefix' => 'category'], function () {
    Route::get('/{cat}', 'CategoryController@singleCat')->name('singleCat');
});

// Фидбэк и анлоад
Route::group(['prefix' => 'user'], function () {
    Route::get('/feedback', 'UserController@feedback')->name('feedback');
    Route::post('/feedback/submit', 'UserController@feedbackSubmit')->name('feedbackSubmit');
    Route::get('/unload', 'UserController@unloadData')->name('unload');
    Route::post('/unload/submit', 'UserController@unloadSubmit')->name('unloadSubmit');
});

// Авторизация и админка
Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/');
    });

    // Account home page
    Route::get('/home', 'HomeController@index')->name('home');

    // Admin
    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/', 'Admin\IndexController@index')->name('admin');
        Route::resource('/categories', Admin\CategoryController::class);
        Route::resource('/news', Admin\NewsController::class);
        Route::resource('/users', Admin\AdminController::class);
        Route::resource('/parsers', Admin\ParsersController::class);
        // Удаление категорий, новостей, пользователей, rss.
        Route::get('categories/{cat}/delete', 'Admin\CategoryController@delete')->name('categories.delete');
        Route::get('/news/{news}/delete', 'Admin\NewsController@delete')->name('news.delete');
        Route::get('/users/{user}/delete', 'Admin\AdminController@delete')->name('users.delete');
        Route::get('/rss/{parser}/delete', 'Admin\ParsersController@delete')->name('parsers.delete');
        // Парсер
        Route::get('/parser/{parser}', 'ParserController@index')->name('parser');
        Route::get('/parser/save/{url}', 'ParserController@save')->name('parser.save');
        Route::get('/parser/veiw', 'ParserController@view')->name('parser.view');
    });
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/facebook/auth', 'SocialAuthController@fbAuth')->name('fb.auth');
    Route::get('/facebook/auth/callback', 'SocialAuthController@fbAuthCallback')->name('fb.callback');
});

Auth::routes();
