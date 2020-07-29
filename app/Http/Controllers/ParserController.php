<?php

namespace App\Http\Controllers;

use App\Services\XmlParserService;
use App\Services\SaveParsedDataService;
use App\Models\Parsers;

class ParserController extends Controller
{
    public function index(Parsers $parser)
    {
        $parsers = Parsers::all();
        $title = 'Parser';
        $parse = new XmlParserService();
        return view('admin.parser', ['title' => $title, 'news' => $parse->parse($parser->source_url), 'parsers' => $parsers, 'parserId' => $parser->id]);
    }

    public function save($id)
    {
        $url = Parsers::find($id)->source_url;
        $parse = new XmlParserService();
        $save = new SaveParsedDataService();
        $save->save($parse->parse($url));
        return redirect()->back()->with('success', 'News added to DB');
    }
}
