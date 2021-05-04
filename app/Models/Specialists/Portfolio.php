<?php

namespace App\Models\Specialists;

use App\Specialist;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }
}
