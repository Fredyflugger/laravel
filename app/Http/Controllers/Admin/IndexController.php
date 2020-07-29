<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;
use App\Models\User;
use App\Models\CreateNews;
use App\Models\CategoryNews;

class IndexController extends Controller
{
    public function index()
    {
        $title = 'Admin';
        $category = Category::all();
        $users = User::all();
        return view('admin.index', ['title' => $title, 'newsCategory' => $category, 'users' => $users]);
    }
}
