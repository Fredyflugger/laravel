<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use App\Models\Parsers;

class IndexController extends Controller
{
    public function index()
    {
        $title = 'Admin';
        $category = Category::all();
        $parsers = Parsers::all();
        $users = User::all();
        return view('admin.index', ['title' => $title, 'newsCategory' => $category, 'users' => $users, 'parsers' =>  $parsers]);
    }
}
