<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Consult;
use App\Models\User;

class Comment extends Model
{
    use HasFactory;
    public function consult(){
        return $this->belongsTo(Consult::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
