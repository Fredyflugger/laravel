<?php

namespace App\Http\Controllers;

use App\Services\XmlParserService;
use App\Services\SaveParsedDataService;
use Illuminate\Http\Request;

class ParserController extends Controller
{
    public function index()
    {
        $title = 'Parser';
        $parse = new XmlParserService();
        return view('admin.parser', ['title' => $title, 'news' => $parse->parse()]);
    }

    public function save()
    {
        $parse = new XmlParserService();
        $save = new SaveParsedDataService();
        $save->save($parse->parse());
        return redirect()->back()->with('success', 'News added to DB');
    }
}
