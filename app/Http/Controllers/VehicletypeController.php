<?php

namespace App\Http\Controllers;

use App\Models\vehiclecategory;
use App\Models\vehicletype;
use Illuminate\Http\Request;

class VehicletypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicletype=vehicletype::all();
        $vehiclecategory=vehiclecategory::all();
        return view('vehicle/index',compact('vehiclecategory','vehicletype'));
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

            'vehicle_cat' => 'required',
            'title'=>'required',
            'price'=>'required',
            'image'=>'required',
            'description'=>'required',
            'engine'=>'required',
            'seat'=>'required',
            'doors'=>'required',
            'fuel'=>'required',
            'transmission'=>'required',
            'versions'=>'required',
            'colors'=>'required',
            
           
    
        ]);

        
        

    $admin=new vehicletype();
    $admin->vehicleId=$req->vehicle_cat;
    $admin->title=$req->title;
    $admin->price=$req->price;
    if($req->hasFile('image')){
        $image=$req->file('image');
            $path = 'public/images/';
            $extension=$image->getClientOriginalExtension();
            $image_name=uniqid().".".$extension;
            $image->storeAs($path,$image_name);
            $admin->image = $image_name;
    }
    $admin->description=$req->description;
    $admin->engine_cap=$req->engine;
    $admin->seat_cap=$req->seat;
    $admin->doors=$req->doors;
    $admin->fuel_type=$req->fuel;
    $admin->transm_type=$req->transmission;
    $admin->version=$req->versions;
    $admin->colours=$req->colors;

    
    // $admin->image=$req->image;
    $save=$admin->save();
    if($save){
        
        return redirect()->route('vehicle_index');
        
    }
    else{
        return back()->with('fail','Smoething went wrong, try again...');

    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vehicletype  $vehicletype
     * @return \Illuminate\Http\Response
     */
    public function show(vehicletype $vehicletype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vehicletype  $vehicletype
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
        $data=vehiclecategory::all();
        
        $vehicle=vehicletype::find($id);
        return view('vehicle/edit',compact('data'),['vehicle' => $vehicle]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\vehicletype  $vehicletype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $req->validate([

            'plan' => 'required',
            'title'=>'required',
            'price'=>'required',
            'image'=>'required',
            'description'=>'required',
            'engine'=>'required',
            'seat'=>'required',
            'doors'=>'required',
            'fuel'=>'required',
            'transmission'=>'required',
            'versions'=>'required',
            'colours'=>'required',
            
           
    
        ]);

        $admin=vehicletype::find($req->id);
        $admin->vehicleId=$req->plan;
        $admin->title=$req->title;
        $admin->price=$req->price;
        if($req->hasFile('image')){
            $image=$req->file('image');
                $path = 'public/images/';
                $extension=$image->getClientOriginalExtension();
                $image_name=uniqid().".".$extension;
                $image->storeAs($path,$image_name);
                $admin->image = $image_name;
        }
        $admin->description=$req->description;
        $admin->engine_cap=$req->engine;
        $admin->seat_cap=$req->seat;
        $admin->doors=$req->doors;
        $admin->fuel_type=$req->fuel;
        $admin->transm_type=$req->transmission;
        $admin->version=$req->versions;
        $admin->colours=$req->colours;
    
        
        // $admin->image=$req->image;
        $save=$admin->save();
        if($save){
            
            return redirect()->route('vehicle_index');
            
        }
        else{
            return back()->with('fail','Smoething went wrong, try again...');
    
        }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vehicletype  $vehicletype
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicletype=vehicletype::find($id);
        $vehicletype->delete();
        if($vehicletype){
            return redirect()->route('vehicle_index');
        }
    }
}
