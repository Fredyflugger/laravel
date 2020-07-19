<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryNews extends Model
{
    protected $table = "category_news";
    protected $primaryKey = "id";
    public $timestamps = false;
    
    protected $fillable = [
        'category_id',
        'news_id'
    ];
}
