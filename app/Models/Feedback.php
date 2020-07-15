<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = "feedback";
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = [
        'username',
        'email',
        'message',
    ];
}
