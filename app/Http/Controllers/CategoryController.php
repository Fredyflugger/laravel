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
        $news = News::all();
        $categories = Category::all();
        return view('news.singleCat', ['title' => $title, 'newsData' => $news, 'newsCategory' => $categories, 'category' => $cat]);
    }

    public function categories() 
    {
        $title="Категории новостей";
        $category = Category::all();
        return view('categories.categories', ['title' => $title, 'newsCategory' => $category]);
    }

    public function addCategory() 
    {
        $title = 'Category Creation';
        return view('categories.categoriesAdd', ['title' => $title]);
    }

    public function addCatSubmit(EditCategoryRequest $request) 
    {
        $create = Category::create($request->validated());
        if ($create) {
            return redirect()->route('news');
        }
        
        return back();
    }

    public function editCat(Category $cat) 
    {
        $title = 'Category Edit';
        return view('categories.categoriesEdit', ['title' => $title, 'newsCategory' => $cat]);
    }

    public function editCatSubmit(EditCategoryRequest $request, Category $cat) 
    {
        $cat->categories = $request->input('categories');
        if ($cat->save()){
           return redirect('/');
        }

        return back();
    }

    public function deleteCat(Category $cat) 
    {
        $cat->delete();
        return redirect('/');
    }
}
