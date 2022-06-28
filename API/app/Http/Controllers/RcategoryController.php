<?php

namespace App\Http\Controllers;

use App\Models\Rcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Rcategory::all();
        
        $subset = $data->map(function($value){
            return $value->only(['id' , 'name' , 'describtion']);
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
            "name"=>"required",
            "describtion"=>"required"
        ]); 
        if($validator->fails()){
            return $this->ErrorResponce($validator->errors()->first());
        }
        Rcategory::create([
            "name"=>$request->name,
            "describtion"=>$request->describtion
        ]);
        return $this->SuccessResponce("Successfully created!");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rcategory  $rcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Rcategory $rcategory)
    {
        return $this->SuccessResponce($rcategory->load('restarauns')->only(['id' , 'name' , 'describtion' , 'restarauns']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rcategory  $rcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rcategory $rcategory)
    {
        $rcategory->update($request->only(["name" , "desribtion"]));
        return $this->SuccessResponce("Successfully updated!");
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rcategory  $rcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rcategory $rcategory)
    {
        $rcategory->delete();
        return $this->SuccessResponce("Successfully deleted!");
        
    }
}
