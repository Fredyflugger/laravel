<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use App\Models\UnloadRequest;
use App\Models\Feedback;
use App\Http\Requests\SubmitFormRequest;
use App\Http\Requests\SubmitUnloadRequest;
use App\Traits\newsDataTrait;

class UserController extends Controller
{
    use newsDataTrait;
    public function feedback()
    {
        $title = 'Feedback';
        $category = Category::all();
        return view('user.feedback', ['title' => $title, 'newsCategory' => $category]);
    }
    public function unloadData()
    {
        $title = 'Unloading Request Form';
        $category = Category::all();
        return view('user.unloadData', ['title' => $title, 'newsCategory' => $category]);
    }
    public function unloadSubmit(SubmitUnloadRequest $request)
    {
        $unload = UnloadRequest::create($request->validated());

        if ($unload) {
            return redirect()->route('news');
        }
        
        return back();
    }
    public function feedbackSubmit(SubmitFormRequest $request)
    {

        $feedback = Feedback::create($request->validated());

        if ($feedback) {
            return redirect()->route('news');
        }
        
        return back();
    }
}
