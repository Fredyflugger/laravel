<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnloadRequest extends Model
{
    protected $table = "unload_requests";
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = [
        'username',
        'email',
        'message',
        'phone_number'
    ];
}
