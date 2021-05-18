<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function specialist()
    {
    	return $this->belongsTo(Specialist::class);
    }
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
