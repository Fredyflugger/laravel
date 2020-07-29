<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parsers extends Model
{
    protected $table = "resources";
    protected $primaryKey = "id";
    public $timestamps = false;
    
    protected $fillable = [
        'source_url',
        'name',
    ];
}
