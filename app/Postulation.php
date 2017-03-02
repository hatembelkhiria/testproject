<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulation extends Model
{
    protected $fillable = [
        'deliveryMan_id', 'delivery_id',
    ];
    public function delivery()
    {
        return $this->belongsTo('App\Delivery');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
