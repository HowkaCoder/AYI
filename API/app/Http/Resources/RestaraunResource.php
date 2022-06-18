<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RestaraunResource extends JsonResource
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
            "restaraun_id"=>$this->id,
            "title"=>$this->title,
            "describtion"=>$this->describtion,
            "main_picture"=>$this->main_picture,
            "main_describtion"=>$this->main_describtion,
            "view"=>$this->view,
            "location"=>$this->location,
            "phone"=>$this->phone,
            "type"=>$this->type,
            "food_grade"=>$this->food_grade,
            "service_grade"=>$this->service_grade,
            "all_grade"=>$this->all_grade,
            "menus"=>MenuResource::make($this->menus)
        ];
    }
}
