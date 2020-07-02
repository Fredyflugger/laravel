<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\newsDataTrait;

class NewsController extends Controller
{
    use newsDataTrait;
    public function index()
    {
        $title = 'My News';
        return view('news.greetings', ['title' => $title], ['newsCategory' => $this->newsCategory]);
    }
    public function create()
    {
        $title = 'News Creation';
        return view('news.create', ['title' => $title, 'newsCategory' => $this->newsCategory]);
    }
    public function edit(int $id)
    {
        return view('news.edit', ['id' => $id]);
    }
    public function singleNews($cat, $news)
    {
        $title = $news;
        return view('news.singleNews', ['cat' => $cat, 'news' => $news, 'title' => $title], ['newsData' => $this->newsData()]);
    }
}
