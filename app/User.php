<?php

namespace App;

use App\Models\Appointment;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_type','name','email','photo', 'password','status','username','country', 'avatar'
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

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }

    public function client()
    {
        return $this->hasOne(Client::class);
    }
    public function specialist()
    {
        return $this->hasOne(Specialist::class);
    }

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }
    public function service_request()
    {
        return $this->hasOne(ServiceRequest::class);
    }
    public function appointment()
    {
        return $this->hasOne(Appointment::class);
    }

    public function reply()
    {
        return $this->hasOne(DisputeReply::class,'sender_id','id');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function dispute(){
        return $this->hasOne(ClientSpecialistDispute::class,'sender_id','id');
    }

    public function disputeReciever(){
        return $this->hasOne(ClientSpecialistDispute::class,'reciever_id','id');
    }
     
}
