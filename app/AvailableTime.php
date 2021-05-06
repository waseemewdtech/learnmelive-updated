<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvailableTime extends Model
{
    protected $table = 'tb_availabletime';
    protected $fillable = ['user_id','mon','tue','wed','thr','fri','sat','sun'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
