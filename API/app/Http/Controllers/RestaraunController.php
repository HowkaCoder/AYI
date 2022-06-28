<?php

namespace App\Http\Controllers;

use App\Http\Requests\RestaraunRequest;
use App\Models\Restaraun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RestaraunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Restaraun::all();
        foreach($data as $value){
            $value->images = [
                "img1"=>$value->img1,
                "img2"=>$value->img2,
                "img3"=>$value->img3
            ];
        }
        $subset = $data->map(function($value){
            return $value->only(['id' , 'city_id' , 'rcategory_id' , 'title' , 'describtion' , 'location' , 'view' , 'stars' , 'images']);
        });
        return $this->SuccessResponce($subset);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all() , [
            "title"=>"required",
            'city_id'=>"required|numeric|exists:App\Models\City,id",
            "rcategory_id"=>"required|numeric|exists:App\Models\Rcategory,id",
            "describtion"=>"required",
            "location"=>"required"
        ]);
        if($validator->fails()){
            return $this->ErrorResponce($validator->errors()->first());
        }
        if(empty($request->img1) and empty($request->img2) and empty($request->img3)){
            $request->img1 = 'error.png';
        }
        else{
            if($request->hasFile('img1')){
            $fileName_1 = time().'_'.$request->file('img1')->getClientOriginalName();
            $request->file('img1')->storeAs('public/images/restaraun', $fileName_1);
            }
            else{
                $fileName_1 = null;
            }
            if($request->hasFile('img2')){
            $fileName_2 = time().'_'.$request->file('img2')->getClientOriginalName();
            $request->file('img2')->storeAs('public/images/restaraun', $fileName_2);
            }
            else{
                $fileName_2 = null;
            } 
            if($request->hasFile('img3')){
            $fileName_3 = time().'_'.$request->file('img3')->getClientOriginalName();
            $request->file('img3')->storeAs('public/images/restaraun', $fileName_3);
            }   
            else{
                $fileName_3 = null;
            }
            Restaraun::create([
                "title"=>$request->title,
                "describtion"=>$request->describtion,
                "city_id"=>$request->city_id,
                "rcategory_id"=>$request->rcategory_id,
                "img1"=>$fileName_1,
                "img2"=>$fileName_2,
                "img3"=>$fileName_3,
                'location'=>$request->location          
            ]);
        }
        

        return $this->SuccessResponce("Successfully created!");



        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaraun  $restaraun
     * @return \Illuminate\Http\Response
     */
    public function show(Restaraun $restaraun)
    {
        return  $this->SuccessResponce($restaraun->load('rcategory' )->load('city')->only(['id' , 'city_id' ,'title' , 'describtion' , 'location' , 'view' , 'stars' , 'city' , 'rcategory']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restaraun  $restaraun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaraun $restaraun)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaraun  $restaraun
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaraun $restaraun)
    {
        $restaraun->delete();
        return $this->SuccessResponce("Sucessfully deletd");
    }

    public function upbeat(Request $request){
        $id = $request->id;
        $validator = Validator::make($request->all() , [
            "title"=>"required",
            'city_id'=>"required|numeric|exists:App\Models\City,id",
            "rcategory_id"=>"required|numeric|exists:App\Models\Rcategory,id",
            "describtion"=>"required",
            "location"=>"required"
        ]);
        if($validator->fails()){
            return $this->ErrorResponce($validator->errors()->first());
        }
        if(empty($request->img1) and empty($request->img2) and empty($request->img3)){
            $request->img1 = 'error.png';
        }
        else{
            if($request->hasFile('img1')){
            $fileName_1 = time().'_'.$request->file('img1')->getClientOriginalName();
            $request->file('img1')->storeAs('public/images/restaraun', $fileName_1);
            }
            else{
                $fileName_1 = null;
            }
            if($request->hasFile('img2')){
            $fileName_2 = time().'_'.$request->file('img2')->getClientOriginalName();
            $request->file('img2')->storeAs('public/images/restaraun', $fileName_2);
            }
            else{
                $fileName_2 = null;
            } 
            if($request->hasFile('img3')){
            $fileName_3 = time().'_'.$request->file('img3')->getClientOriginalName();
            $request->file('img3')->storeAs('public/images/restaraun', $fileName_3);
            }
            else{
                $fileName_3 = null;
            }
        }
        Restaraun::where('id' , $id)->update([
            "title"=>$request->title,
            "describtion"=>$request->describtion,
            "city_id"=>$request->city_id,
            "rcategory_id"=>$request->rcategory_id,
            "img1"=>$fileName_1,
            "img2"=>$fileName_2,
            "img3"=>$fileName_3,
            'location'=>$request->location                
        ]);
        return $this->SuccessResponce("Successfully updated!");
    }
}
