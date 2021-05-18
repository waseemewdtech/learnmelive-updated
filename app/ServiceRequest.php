<?php

namespace App;

use App\Models\Bid;
use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function bids()
    {
        return $this->hasMany(Bid::class);
    }
    
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

}
