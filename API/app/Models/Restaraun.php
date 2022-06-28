<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restaraun extends Model
{
    use HasFactory , SoftDeletes;
    protected $guarded = ['id'];

    public function city(){
        return $this->belongsTo(City::class)->select(['id' , 'name' , 'region_id' , 'location' , 'main_img']);
    }
    public function menus(){
        return $this->hasMany(Menu::class);
    }
    public function rcategory(){
        return $this->belongsTo(Rcategory::class)->select(['id' , 'name' , 'describtion']);
    }
}
 