<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryManRequest extends Model
{
    protected $fillable = [
        'user_id', 'means_of_transport', 'cin_photo','valdiate','comment',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
