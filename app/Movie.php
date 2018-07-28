<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
    	'name', 'slug', 'description', 'author', 'actors', 'country', 'premiere', 'rating', 'category'
    ];

    public function genres()
    {
    	return $this->belongsToMany('App\Genre');
    }

    public function image()
    {
    	return $this->hasOne('App\Image');
    }
}
