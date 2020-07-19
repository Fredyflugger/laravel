<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Request;
use App\Models\News;
use App\Models\Category;
use App\Models\CreateNews;
use App\Models\CategoryNews;
use App\Http\Requests\CreateNewsRequest;
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
    public function newsCreatePage()
    {
        $title = 'News Creation';
        $category = Category::all();
        return view('news.create', ['title' => $title, 'newsCategory' => $category]);
    }
    public function newsCreate(CreateNewsRequest $request)
    {
        $create = CreateNews::create($request->only('title', 'text'));
        foreach ($request->only('categories')['categories'] as $req) {
            $createPivot = CategoryNews::create(["category_id" => $req, "news_id" => $create->id]);
        }

        if ($create && $createPivot) {
            return redirect()->route('news');
        }
        
        return back();
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
        $news->delete();
        return redirect('/');
    }

    public function editSubmit(CreateNewsRequest $request, News $news)
    {
        $news->title = $request->input('title');
        $news->text = $request->input('text');
        if ($news->save()){
           return redirect('/');
        }

        return back();
    }
}
