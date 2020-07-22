<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Request;
use App\Models\News;
use App\Models\Category;
use App\Models\CreateNews;
use App\Models\CategoryNews;
use App\Http\Requests\CreateNewsRequest;
use App\Traits\newsDataTrait;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'News Creation';
        $category = Category::all();
        return view('news.create', ['title' => $title, 'newsCategory' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNewsRequest $request)
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $title = 'News Edit';
        $category = Category::all();
        return view('news.newsEdit', ['title' => $title, 'newsData' => $news, 'newsCategory' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateNewsRequest $request, News $news)
    {
        $news->title = $request->input('title');
        $news->text = $request->input('text');
        if ($news->save()){
           return redirect('/');
        }

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(News $news)
    {
        $news->delete();
        return redirect('/');
    }
}
