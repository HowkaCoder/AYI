<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function SuccessResponce($data = "Success Responce" , $code = 200){

        return response(['message'=>$data] , $code);
        
    }

    public function ErrorResponce($data = ["message"=>"Error Responce"] , $code = 419){
        
        return response($data , $code);
    }
}
