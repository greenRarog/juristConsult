<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;

class Consult extends Model
{
    use HasFactory;
    
    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    
    public function author(){
        return $this->belongsTo(User::class, 'author_id');
    }    
    
    public function jurist(){
        return $this->belongsTo(User::class, 'jurist_id');
    }        
}
