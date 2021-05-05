<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "tb_categories";
    public function subcategories()
    {
    	return $this->hasMany(SubCategory::class);
    }


    public function specialist()
    {
    	return $this->hasOne(Specialist::class);
    }

    public function servicerequest()
    {
    	return $this->hasOne(ServiceRequest::class);
    }
}
