<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $data = City::all();
        
        $subset = $data->map(function($value){
            return $value->only(['id' , 'location','region_id' , 'main_img']);
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
        // City::create($request->only(["region_id" , "name"]));
        $validator = Validator::make($request->all() , [
            "region_id"=>"required|exists:App\Models\Region,id",
            "name"=>"required",
            "location"=>"required"
        ]); 
        if($validator->fails()){
            return $this->ErrorResponce($validator->errors()->first());
        }
        
        if(!empty($request->main_img)){
            $main_img = time().'_'.$request->file('main_img')->getClientOriginalName();
            $request->file('main_img')->storeAs('public/images/restaraun', $main_img);
            
        } else{
            $main_img = null;
        }
        City::create([
            "name"=>$request->name,
            "region_id"=>$request->region_id,
            "location"=>$request->location,
            "main_img"=>$main_img   
        ]);
    
        return $this->SuccessResponce("Sucessfully created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        return $this->SuccessResponce($city->load('restarauns')->load('region')->only(['id' , 'location','region_id' , 'main_img' , 'region' , 'restarauns']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(CityRequest $request, City $city)
    {
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete();
        return $this->SuccessResponce("Successfully deleted");
    }
    public function upbeat(Request $request){

        $validator = Validator::make($request->all() , [
            "region_id"=>"required|exists:App\Models\Region,id",
            "name"=>"required",
            "location"=>"required"
        ]); 
        if($validator->fails()){
            return $this->ErrorResponce($validator->errors()->first());
        }
        
        if(!empty($request->main_img)){
            $main_img = time().'_'.$request->file('main_img')->getClientOriginalName();
            $request->file('main_img')->storeAs('public/images/restaraun', $main_img);
            
        } else{
            $main_img = null;
        }
        City::where('id' , $request->id)->update([
            "name"=>$request->name,
            "region_id"=>$request->region_id,
            "location"=>$request->location,
            "main_img"=>$main_img   
        ]);
        return $this->SuccessResponce("Successfully updated!");
    
    }
}
