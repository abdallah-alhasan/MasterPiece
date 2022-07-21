<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{

    protected $fillable = [
        'title', 
        'image', 
        'tags',
        'platform_id', 
        'user_id', 
    ];

    use HasFactory;
}
