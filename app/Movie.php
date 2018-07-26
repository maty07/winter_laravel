<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
    	'name', 'slug', 'description', 'author', 'actors', 'country', 'premiere', 'poster', 'rating', 'category'
    ];

    public function genres()
    {
    	return $this->belongsToMany('App\Genre');
    }
}
