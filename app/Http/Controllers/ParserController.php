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
        return view('admin.parser', ['title' => $title, 'news' => $parse->parse($parser->source_url), 'parsers' => $parsers]);
    }

    public function save()
    {
        $link = 'https://news.yandex.ru/Moscow/index.rss';
        $parse = new XmlParserService();
        $save = new SaveParsedDataService();
        $save->save($parse->parse($link));
        return redirect()->back()->with('success', 'News added to DB');
    }
}
