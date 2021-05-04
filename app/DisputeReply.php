<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisputeReply extends Model
{
    public function dispute()
    {
        return $this->belongsTo(ClientSpecialistDispute::class,'dispute_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'sender_id','id');
    }
}
