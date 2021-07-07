<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plan=Plan::all();
        return view('plans/index',compact('plan'));
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

            'title'=>'required',
            'image'=>'required',
            'description'=>'required',
            'button'=>'required',



        ]);




    $admin=new Plan();
    $admin->title=$req->title;
    $admin->description=$req->description;
    $admin->btn_name=$req->button;

    if($req->hasFile('image')){
        $image=$req->file('image');
            $path = 'public/images/';
            $extension=$image->getClientOriginalExtension();
            $image_name=uniqid().".".$extension;
            $image->storeAs($path,$image_name);
            $admin->image = $image_name;
    }
    // $admin->image=$req->image;
    $save=$admin->save();
    if($save){

        return redirect()->route('plans_index');

    }
    else{
        return back()->with('fail','Smoething went wrong, try again...');

    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Plan::find($id);
        return view('plans/edit',['data' => $data]);
    }

    public function description($id){

        $plan=Plan::find($id);
        return view('plans/description',['plan' => $plan]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $req->validate([

            'title'=>'required',
            'image'=>'required',
            'description'=>'required',
            'button'=>'required',



        ]);




    $admin=Plan::find($req->id);
    $admin->title=$req->title;
    $admin->description=$req->description;
    $admin->btn_name=$req->button;

    if($req->hasFile('image')){
        $image=$req->file('image');
            $path = 'public/images/';
            $extension=$image->getClientOriginalExtension();
            $image_name=uniqid().".".$extension;
            $image->storeAs($path,$image_name);
            $admin->image = $image_name;
    }
    // $admin->image=$req->image;
    $save=$admin->save();
    if($save){

        return redirect()->route('plans_index');

    }
    else{
        return back()->with('fail','Smoething went wrong, try again...');

    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $plan=Plan::find($id);
        $plan->delete();
        if($plan){
            return redirect()->route('plans_index');
        }

    }
}
