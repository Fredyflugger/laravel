<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\newsDataTrait;

class CategoryController extends Controller
{
    use newsDataTrait;
    public function singleCat($cat)
    {
        $title = 'News Categories';
        return view('news.singleCat', ['cat' => $cat, 'title' => $title, 'newsData' => $this->newsData, 'newsCategory' => $this->newsCategory]);
    }
}
