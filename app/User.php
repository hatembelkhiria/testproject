<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\DeliveryManRequest;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','password','last_name','photo_url',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
    public function postulations()
    {
        return $this->hasMany('App\Postulation');
    }
    public function deliverys()
    {
        return $this->hasMany('App\Delivery');
    }
    public function deliveryManRequests()
    {
        return $this->hasMany(DeliveryManRequest::class);
    }
    public function sendededMessages()
    {
        return $this->hasMany('App\Message');
    }
    public function recievedMessages()
    {
        return $this->hasMany('App\Message');
    }
    public function addPostulation(Postulation $postulation)
    {
        $this->postulations()->save($postulation);
    }
    public function addReview (Review $review)
    {
        $this->Reviews()->save($review);
    }
    public function addDeliveryManRequest(DeliveryManRequest $deliveryManRequest)
    {
        $this->deliveryManRequests()->save($deliveryManRequest);

    }
    public function addMessage(Message $message)
    {
        $this->RecievedMessages()->save($message);
    }
    public function addDelivery(Delivery $delivery)
    {
        $this->Deliverys()->save($delivery);
    }
    public function isDeliveryMan()
    {
        return $this->DeliveryManRequests()->where('valdiate', 1)->get()->count()==1;
    }
}
