<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Traits\newsDataTrait;

class CategoryController extends Controller
{
    use newsDataTrait;
    public function singleCat($cat)
    {
        $title = "Новостя";
        $category = Category::all();
        $news = News::all();
        return view('news.singleCat', ['cat' => $cat, 'title' => $title, 'newsData' => $news, 'newsCategory' => $category]);
    }
}
