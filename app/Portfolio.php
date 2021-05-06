<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table='tb_portofolio';
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
