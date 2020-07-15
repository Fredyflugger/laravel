<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $primaryKey = "id";
    
    public function newsCategory() {
        return \DB::select("SELECT categories, id FROM categories");
    }

    protected $fillable = [
        'categories',
    ];
}
