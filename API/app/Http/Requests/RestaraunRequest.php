<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaraunRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "title"=>"required",
            'city_id',
            "describtion"=>"required",
            "main_picture"=>"required",
            "main_describtion"=>"required",
            "location"=>"required",
            "phone"=>"numeric|required",
            "type"=>"required"
        ];
    }

}
