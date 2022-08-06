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

    public function scopeFilter($query , array $filters){
        if($filters['search'] ?? false){
            $query->where('title' , 'like' , '%' . request('search') . '%');
        }
        if($filters['tags'] ?? false){
            $query->where('tags' , 'like' , '%' . request('tags') . '%');
        }
        if($filters['platform_id'] ?? false){
            $query->Where('platform_id' , 'like' , '%' . request('platform_id') . '%');
        }
        if($filters['sort'] ?? false){
            if($filters['sort'] == 'asc'){
                $query->orderBy('created_at', 'asc');
            }
            if($filters['sort'] == 'desc'){
                $query->orderBy('created_at', 'desc');
            }
        }
    }

    use HasFactory;
}
