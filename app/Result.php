<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Result extends Model
{
    use HasFactory;
    
    public function group()
    {
        return $this->belongsToMany(Group::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
