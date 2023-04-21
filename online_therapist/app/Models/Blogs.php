<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'desc',
        'user_id',
    ];

    
    public function scopeFilter($query , array $filters){
        if($filters['search'] ?? false) {
            $query ->where('title' , 'like' , '%' . request('search') . '%');
        }

    }
}