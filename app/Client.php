<?php

namespace App;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'user_id','business_phone','business_location',
    ];
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }
}
