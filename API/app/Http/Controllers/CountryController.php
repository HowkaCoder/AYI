<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountryRequest;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Country::all();
        
        $subset = $data->map(function($value){
            return $value->only(['id' , "name",'location', 'main_img']);
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
        // Country::create($request->only(["name" , "location" , "main_img"]));
        $validator = Validator::make($request->all() , [
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
        Country::create([
            "name"=>$request->name,
            "location"=>$request->location,
            "main_img"=>$main_img   
        ]);
        return $this->SuccessResponce("Successfully created!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        return $this->SuccessResponce($country->load('regions')->only(['id' , 'location', 'main_img' , 'regions']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(CountryRequest $request, Country $country)
    {
        // $country->update($request->only(["name"]));

        return $this->SuccessResponce("Successfully updated!");
    }

    /**
     * Remove the specified resource from storage.
     * 
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        $country->delete();
        return $this->SuccessResponce("Successfully deleted!");
    }
    public function upbeat(Request $request){

        $validator = Validator::make($request->all() , [
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
        Country::where('id' , $request->id)->update([
            "name"=>$request->name,
            "location"=>$request->location,
            "main_img"=>$main_img   
        ]);
        return $this->SuccessResponce("Successfully updated!");
    
    }
}
