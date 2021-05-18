<?php

namespace App\Models;

use App\ServiceRequest;
use App\Specialist;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    public function service_request()
    {
        return $this->belongsTo(ServiceRequest::class);
    }
    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getStatusAttribute($attribute)
    {
        return [
            '0' => 'Declined',
            '1' => 'Approved',
            
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
    public function getWorkStatusAttribute($attribute)
    {
        return [
            '0' => 'Un-Complete',
            '1' => 'Completed',
        ][$attribute];
    }
}
