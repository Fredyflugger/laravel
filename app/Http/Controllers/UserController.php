<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\newsDataTrait;

class UserController extends Controller
{
    use newsDataTrait;
    public function auth()
    {
        $title = 'Authentication';
        return view('user.user', ['title' => $title, 'newsCategory' => $this->newsCategory()]);
    }
    public function feedback()
    {
        $title = 'Feedback';
        return view('user.feedback', ['title' => $title, 'newsCategory' => $this->newsCategory()]);
    }
    public function unloadData()
    {
        $title = 'Unloading Request Form';
        return view('user.unloadData', ['title' => $title, 'newsCategory' => $this->newsCategory()]);
    }
    public function unloadSubmit(Request $request)
    {
        $name = $request->input('unloadName');
        $mail = $request->input('unloadMail');
        $phone = $request->input('unloadPhone');
        $text = $request->input('unloadText');
        $str = "name:".$name. " - email:".$mail. " - phone:".$phone." - text:".$text.PHP_EOL;
        file_put_contents(storage_path('app/public/unloadRequests.txt'), $str, FILE_APPEND);
        return redirect()->route('news');
    }
    public function feedbackSubmit(Request $request)
    {
        $name = $request->input('subName');
        $mail = $request->input('subMail');
        $text = $request->input('subText');
        $str = "name:".$name. " - email:".$mail." - text:".$text.PHP_EOL;
        file_put_contents(storage_path('app/public/feedback.txt'), $str, FILE_APPEND);
        return redirect()->route('news');
        // Target class [App\Http\Controllers\SubmitFormRequest] does not exist.
    }
}
