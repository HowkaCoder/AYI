<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory , SoftDeletes;
    protected $guarded = ['id'];

    public function restaraun(){
        return $this->belongsTo(Restaraun::class);
    }
    public function foods(){
        return $this->hasMany(Food::class)->select('id' , 'menu_id' , 'name' , 'price', 'stars' , 'img1' , 'img2' , 'img3');
    }
}
