<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    public function restarauns(){
        return $this->hasMany(Restaraun::class)->select(['id' , 'city_id' , 'rcategory_id' , 'title' , 'location' , 'img1' , 'img2' , 'img3' , 'view' , 'stars']);
    }
    public function region(){
        return $this->belongsTo(Region::class)->select(['id' , 'name' , 'location' , 'main_img']);
    }
}
