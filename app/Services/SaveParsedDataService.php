<?php

namespace App\Services;

use App\Models\CreateNews;
use Illuminate\Http\Request;
use Validator;

use Orchestra\Parser\Xml\Facade as XmlParser;

class SaveParsedDataService
{
    public function save($data) {
        foreach ($data as $value) {
            $create = CreateNews::create($value);    
        }
    }
}