<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'rating', 'comment', 'password','last_name','photo_url',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
