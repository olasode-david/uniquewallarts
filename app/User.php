<?php

namespace App;

use App\Order;
use App\BillingDetail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function account()
    {
        return $this->hasMany(BillingDetail::class, 'user_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, "user_id")->latest();
    }

    public function paid()
    {
        return $this->hasMany(Order::class)->take(1)->latest();
    }
}
