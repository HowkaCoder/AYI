<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    public function regions(){
        return $this->hasMany(Region::class)->select(['id' , 'country_id','name' , 'location' , 'main_img']);
    }


    
    // public function cities(){
    //     return $this->hasManyThrough(Region::class);
    // }
}
