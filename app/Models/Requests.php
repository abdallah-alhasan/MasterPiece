<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $table = 'requests';
    protected $fillable = [
        'user_id', 
        'trade_id',
        'trade_with_id',
    ];
    use HasFactory;
}
