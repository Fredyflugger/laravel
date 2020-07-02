<?php

namespace App\Http\Controllers;
use App\Traits\newsDataTrait;

use Illuminate\Http\Request;

class UserController extends Controller
{
    use newsDataTrait;
    public function auth()
    {
        $title = 'Authentication';
        return view('user.user', ['title' => $title, 'newsCategory' => $this->newsCategory]);
    }
}
