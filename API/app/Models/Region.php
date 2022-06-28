<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    public function country(){
        return $this->belongsTo(Country::class)->select(['id' , 'name' , 'location' , 'main_img']);
    }

    
    public function cities(){
        return $this->hasMany(City::class)->select(['id' , 'region_id','name' , 'location' , 'main_img']);
    }
}
