<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Traits\newsDataTrait;

class NewsController extends Controller
{
    use newsDataTrait;
    public function index()
    {
        $title = 'My News';
        $category = Category::all();
        $news = News::orderBy('created_at', 'desc')->paginate(6);
        return view('news.greetings', ['title' => $title], ['newsCategory' => $category, 'newsData' => $news]);
    }
    public function create()
    {
        $title = 'News Creation';
        $category = Category::all();
        return view('news.create', ['title' => $title, 'newsCategory' => $category]);
    }
    public function edit(int $id)
    {
        return view('news.edit', ['id' => $id]);
    }
    public function singleNews(News $news)
    {
        $title = 'Новостя';
        return view('news.singleNews', ['title' => $title], ['newsData' => $news]);
    }

    public function newsEdit(News $news)
    {
        $title = 'News Edit';
        $category = Category::all();
        return view('news.newsEdit', ['title' => $title], ['newsData' => $news, 'newsCategory' => $category]);
    }

    public function newsDelete(News $news)
    {
        $title = 'Deleting News...';
        $news->delete();
        return redirect('/');
    }

    public function editSubmit(Request $request, News $news)
    {
        $news->title = $request->input('title');
        $news->text = $request->input('text');
        if ($news->save()){
           return redirect('/');
        }

        return back();
    }
}
