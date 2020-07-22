<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Request;
use App\Models\News;
use App\Models\Category;
use App\Models\CreateNews;
use App\Models\CategoryNews;
use App\Http\Requests\CreateNewsRequest;

class HomePageController extends Controller
{
    public function index()
    {
        $title = 'My News';
        $category = Category::all();
        $news = News::orderBy('created_at', 'desc')->paginate(6);
        return view('news.greetings', ['title' => $title], ['newsCategory' => $category, 'newsData' => $news]);
    }
   
    public function singleNews(News $news)
    {
        $title = 'Новостя';
        return view('news.singleNews', ['title' => $title], ['newsData' => $news]);
    }

}
