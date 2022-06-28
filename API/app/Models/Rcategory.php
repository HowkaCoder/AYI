<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rcategory extends Model
{
    use HasFactory , SoftDeletes;
    protected $guarded = ['id'];

    public function restarauns(){
        return $this->hasMany(Restaraun::class)->select(['id' , 'city_id' , 'rcategory_id' , 'title' , 'location' , 'img1' , 'img2' , 'img3' , 'view' , 'stars']);
    }
}
