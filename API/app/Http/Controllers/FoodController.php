<?php

namespace App\Http\Controllers;

use App\Http\Requests\FoodRequest;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->SuccessResponce(Food::all());
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
            "menu_id"=>"required|numeric|exists:App\Models\Menu,id",
            "name"=>"required",
            "price"=>"required|numeric"
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
        Food::create([
            "menu_id"=>$request->menu_id,
            "name"=>$request->name,
            "price"=>$request->price,
            "img1"=>$fileName_1,
            "img2"=>$fileName_2,
            "img3"=>$fileName_3
        ]);

        return $this->SuccessResponce("Successfully created!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        return $this->SuccessResponce($food->load('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        $food->delete();

        return $this->SuccessResponce("Successfully deleted!");
    }

    public function upbeat(Request $request){
        
        $validator = Validator::make($request->all() , [
            "menu_id"=>"required|numeric|exists:App\Models\Menu,id",
            "name"=>"required",
            "price"=>"required|numeric"
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
        
        Food::where('id' , $request->id)->update([
            "menu_id"=>$request->menu_id,
            "name"=>$request->name,
            "price"=>$request->price,
            "img1"=>$fileName_1,
            "img2"=>$fileName_2,
            "img3"=>$fileName_3
        ]);
        return $this->SuccessResponce("Successfull updated");

    }
}
