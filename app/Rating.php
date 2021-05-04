<?php

namespace App;
use App\Models\Appointment;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}
