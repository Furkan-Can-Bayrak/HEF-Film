<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;


    public function users()
    {
        return $this->belongsToMany(User::class,'user_film','film_id','user_id');
    }

}
