<?php

namespace App;

use App\Models\Appointment;
use App\Models\Bid;
use App\Models\Specialists\Portfolio;
use App\Models\Specialists\Service;
use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    protected $fillable = [
        'user_id','business_phone','business_name','business_location','opening_hours','category_id','sub_category_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }
    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }
    public function bids()
    {
        return $this->hasMany(Bid::class);
    }
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

}
