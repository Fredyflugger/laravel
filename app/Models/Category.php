<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $primaryKey = "id";
    
    public function news() {
        return $this->belongsToMany('App\Models\News');
    }

    protected $fillable = [
        'categories',
    ];
}
