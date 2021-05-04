<?php

namespace App\Models\Specialists;

use App\Category;
use App\Models\Appointment;
use App\Specialist;
use App\SubCategory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function subcategories()
    {
        return $this->hasMany(SubCategory::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }
    public function appointment()
    {
        return $this->hasOne(Appointment::class);
    }
    public function getStatusAttribute($attribute)
    {
        return [
            '0'=>'Inactive',
            '1'=>'Active'
        ][$attribute];
    }
}
