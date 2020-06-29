<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $title = 'Greetings';
        return view('index', ['title' => $title]);
    }
    public function auth()
    {
        $title = 'Authentication';
        return view('user.user', ['title' => $title]);
    }
}
