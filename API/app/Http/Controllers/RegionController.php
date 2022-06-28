<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegionRequest;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Region::all();
        
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
        // Region::create($request->only(["name" , "country_id"]));
    
        $validator = Validator::make($request->all() , [
            "country_id"=>"required|exists:App\Models\Country,id",
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
        Region::create([
            "name"=>$request->name,
            "country_id"=>$request->country_id,
            "location"=>$request->location,
            "main_img"=>$main_img   
        ]);
    

        return $this->SuccessResponce("Successfully created!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region)
    {
        // return $this->SuccessResponce($region);

        return $this->SuccessResponce($region->load('cities')->load('country')->only(['id' , 'location','region_id' , 'main_img' , 'cities' , 'country']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Region $region)
    {
        // $region->update($request->only(['name' , 'country_id']));

        return $this->SuccessResponce("Successfully updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region)
    {
        $region->delete();
        
        return $this->SuccessResponce("Successfully deleted!");
    }

    public function upbeat(Request $request){

        $validator = Validator::make($request->all() , [
            "country_id"=>"required|exists:App\Models\Country,id",
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
        Region::where('id' , $request->id)->update([
            "name"=>$request->name,
            "country_id"=>$request->country_id,
            "location"=>$request->location,
            "main_img"=>$main_img   
        ]);
        return $this->SuccessResponce("Successfully updated!");
    
    }
}
