<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $title = 'News';
        $id = mt_rand(1,100);
        return view('news.index', ['id' => $id, 'title' => $title], ['newsData' => $this->newsData()]);
    }
    public function create()
    {
        $title = 'News Creation';
        return view('news.create', ['title' => $title]);
    }
    public function edit(int $id)
    {
        return view('news.edit', ['id' => $id]);
    }
    public function singleCat($cat)
    {
        $title = 'News Categories';
        return view('news.singleCat', ['cat' => $cat, 'title' => $title], ['newsData' => $this->newsData()]);
    }
    public function singleNews($cat, $news)
    {
        $title = $news;
        return view('news.singleNews', ['cat' => $cat, 'news' => $news, 'title' => $title], ['newsData' => $this->newsData()]);
    }
    public function newsData()
    {
        $newsData = [
            'sport' => array('sport.test1', 'sport.test2', 'sport.test3', 'sport.test4'),
            'fashion'=> array('fashion.test1', 'fashion.test2', 'fashion.test3', 'fashion.test4'),
            'art'=> array('art.test1', 'art.test2', 'art.test3', 'art.test4'),
            'videogames'=> array('videogames.test1', 'videogames.test2', 'videogames.test3', 'videogames.test4'),
            'nature' => array('nature.test1', 'nature.test2', 'nature.test3', 'nature.test4')
        ];
        return $newsData;
    }
}
