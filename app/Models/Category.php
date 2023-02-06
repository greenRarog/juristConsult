<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Consult;

class Category extends Model
{
    use HasFactory;
    
    public function consults(){
        return $this->hasMany(Consult::class);
    }
}
