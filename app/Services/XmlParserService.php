<?php

namespace App\Services;

use Orchestra\Parser\Xml\Facade as XmlParser;

class XmlParserService
{
    public function parse(): array
    {
        $xml = XmlParser::load('https://news.yandex.ru/Moscow/index.rss');
        $parse = $xml->parse([
            'news' => [
                'uses' => 'channel.item[title,description,link,pubDate]'
            ]
        ]);
        return $parse['news'];
    }
}
