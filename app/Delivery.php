<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $fillable = [
        'item', 'item_photo', 'pickup_location_X','pickup_location_Y','destination_X','destination_Y','price','details','status',
        'marchand_photo','delivery_requester_photo','weight','size','deliveryMan_id',
    ];

    public function review()
    {
        return $this->hasOne('App\Review');
    }
    public function postulations()
    {
        return $this->hasMany('App\Postulation');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function messages()
    {
        return $this->hasMany('App\Message');
    }
}
