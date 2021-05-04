<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Appointment;
class ClientSpecialistDispute extends Model
{
    public function appointment()
    {
        return $this->belongsTo(Appointment::class,'project_id','id');
    }

    public function replies()
    {
        return $this->hasMany(DisputeReply::class,'dispute_id','id');	
    }

    public function sender(){
        return $this->belongsTo(User::class,'sender_id','id');
    }

    public function reciever(){
        return $this->belongsTo(User::class,'reciever_id','id');
    }
}
