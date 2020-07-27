<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CreateNews extends Model
{
    protected $table = "news";
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = [
        'title',
        'description',
        'link',
        'created_at',
    ];
}
