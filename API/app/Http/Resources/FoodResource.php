<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FoodResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'food_id'=>$this->id,
            'name'=>$this->name,
            "price"=>$this->price,
            'img1'=>$this->img1,
            'img2'=>$this->img2,
            'img3'=>$this->img3
        ];
    }
}
