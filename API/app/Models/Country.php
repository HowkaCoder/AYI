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
        return $this->hasMany(Region::class);
    }


    
    // public function cities(){
    //     return $this->hasManyThrough(Region::class);
    // }
}
