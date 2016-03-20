<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'artist', 'price', 'genre_id'
    ];

    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }
}
