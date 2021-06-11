<?php

namespace App\Http\Controllers;

use App\Models\vehiclecategory;
use App\Models\Plan;
use Illuminate\Http\Request;

class VehiclecategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $vehiclecategory=vehiclecategory::all();
        $plan=Plan::all();
        return view('vehicle_category/index',compact('vehiclecategory','plan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $req->validate([

            'plan_cat' => 'required',
            'title'=>'required',
            'image'=>'required',
            
        ]);

        $admin=new vehiclecategory();
    $admin->planId=$req->plan_cat;
    $admin->title=$req->title;
    if($req->hasFile('image')){
        $image=$req->file('image');
            $path = 'public/images/';
            $extension=$image->getClientOriginalExtension();
            $image_name=uniqid().".".$extension;
            $image->storeAs($path,$image_name);
            $admin->image = $image_name;
    }

    $save=$admin->save();
    if($save){
        
        return redirect()->route('vehiclecategory_index');
        
    }
    else{
        return back()->with('fail','Smoething went wrong, try again...');

    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vehiclecategory  $vehiclecategory
     * @return \Illuminate\Http\Response
     */
    public function show(vehiclecategory $vehiclecategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vehiclecategory  $vehiclecategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plan=Plan::all();
        $data=vehiclecategory::find($id);
        return view('vehicle_category/edit',['data' => $data],compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\vehiclecategory  $vehiclecategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        
        $req->validate([

            'plan_cat' => 'required',
            'title'=>'required',
            'image'=>'required',
            
        ]);

        $admin=vehiclecategory::find($req->id);
        $admin->planId=$req->plan_cat;
    $admin->title=$req->title;
    if($req->hasFile('image')){
        $image=$req->file('image');
            $path = 'public/images/';
            $extension=$image->getClientOriginalExtension();
            $image_name=uniqid().".".$extension;
            $image->storeAs($path,$image_name);
            $admin->image = $image_name;
    }

    $save=$admin->save();
    if($save){
        
        return redirect()->route('vehiclecategory_index');
        
    }
    else{
        return back()->with('fail','Smoething went wrong, try again...');

    }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vehiclecategory  $vehiclecategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehiclecategory=vehiclecategory::find($id);
        $vehiclecategory->delete();
        if($vehiclecategory){
            return redirect()->route('vehiclecategory_index');
        }
    }
}
