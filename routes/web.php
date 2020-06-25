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

Route::get('/', function () use ($text, $title) {
    return <<<php
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$title</title>
</head>
<body>
    <h1>$text</h1>
    lorem ipsum dolor ....
</body>
</html>
php;
});

Route::get('/greetings', function () {
    $name = request()->has('name') ? request()->get('name') : null;
    if (is_null($name)) {
        return "Specify name";
    }
    
    return "Hello, ". $name;
});

Route::get('/about', function () {
    echo "<h1>I will fill it later... Probably...</h1>";
});

Route::get('/news', function () {
    echo "<h1>Here be news. Somewhere.</h1>";
});
