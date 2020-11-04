<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }


    public function getImageAttribute($value)
    {
        return asset('storage/'.$value );
    }

    
}