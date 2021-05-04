<?php

namespace App\Models;

use App\Client;
use App\Models\Specialists\Service;
use App\Specialist;
use App\User;
use App\Rating;
use App\ClientSpecialistDispute;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function rating()
    {
        return $this->hasOne(Rating::class);
    }

    public function dispute()
    {
        return $this->hasOne(ClientSpecialistDispute::class,'project_id','id');
    }

    public function getStatusAttribute($attribute)
    {
        return [
            '0' => 'Pending',
            '1' => 'Approved',
            '2' => 'Cancelled',
            '3' => 'Completed'
        ][$attribute];
    }
    public function getPaymentStatusAttribute($attribute)
    {
        return [
            '0' => 'Pending',
            '1' => 'Partial Paid',
            '2' => 'Paid',
        ][$attribute];
    }
}
