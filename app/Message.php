<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'reciever_id', 'sender_id', 'message','delivery_id',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function delivery()
    {
        return $this->belongsTo('App\Delivery');
    }
}
