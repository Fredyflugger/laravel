<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use App\Http\Requests\EditCategoryRequest;
use App\Traits\newsDataTrait;

class CategoryController extends Controller
{
    use newsDataTrait;
    public function singleCat(Category $cat)
    {
        $title = "Новостя";
        $categories = Category::all();
        return view('news.singleCat', ['title' => $title, 'newsCategory' => $categories, 'category' => $cat]);
    }
    // public function categories() 
    // {
    //     $title="Категории новостей";
    //     $category = Category::all();
    //     return view('categories.categories', ['title' => $title, 'newsCategory' => $category]);
    // }
}
