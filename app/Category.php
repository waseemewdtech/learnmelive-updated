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

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function servicerequest()
    {
    	return $this->hasOne(ServiceRequest::class);
    }

    public function serviceCategory()
    {
    	return $this->hasOne(Category::class);
    }
}
