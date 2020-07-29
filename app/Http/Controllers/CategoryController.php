<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function singleCat(Category $cat)
    {
        $title = "Новостя";
        $categories = Category::all();
        return view('news.singleCat', ['title' => $title, 'newsCategory' => $categories, 'category' => $cat]);
    }
}
