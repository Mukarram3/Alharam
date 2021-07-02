<?php

namespace App\Http\Controllers;

use App\Models\finance;
use App\Models\Plan;
use App\Models\vehiclecategory;
// use App\Models\finance;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $finance=finance::with('hasplan')->get();
        $plan=Plan::all();
        return view('finance_mode/index',compact('finance','plan'));
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
            'description'=>'required',
            'tenure_year' =>'required',
            'total_amount' =>'required',
            'installment' => 'required',
            'instal_duration' => 'required',
            
        ]);

        $admin=new finance();
    $admin->planId=$req->plan_cat;
    $admin->title=$req->title;
    $admin->description=$req->description;
    $admin->tenure_year=$req->tenure_year;
    $admin->total_amount=$req->total_amount;
    $admin->installments=$req->installment;
    $admin->instal_duration=$req->instal_duration;
    

    $save=$admin->save();
    if($save){
        
        return redirect()->route('finance_index');
        
    }
    else{
        return back()->with('fail','Smoething went wrong, try again...');

    }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function show(finance $finance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plan=Plan::all();
        $finance=finance::find($id);
        return view('finance_mode/edit',['finance' => $finance],compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $req->validate([

            'plan_cat' => 'required',
            'title'=>'required',
            'description'=>'required',
            'tenure_year' =>'required',
            'total_amount' =>'required',
            'installment' => 'required',
            'instal_duration' => 'required',
            
        ]);

        $admin=finance::find($req->id);
        $admin->planId=$req->plan_cat;
    $admin->title=$req->title;
    $admin->description=$req->description;
    $admin->tenure_year=$req->tenure_year;
    $admin->total_amount=$req->total_amount;
    $admin->installments=$req->installment;
    $admin->instal_duration=$req->instal_duration;
    $save=$admin->save();
    if($save){
        
        return redirect()->route('finance_index');
        
    }
    else{
        return back()->with('fail','Smoething went wrong, try again...');

    }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $finance=finance::find($id);
        $finance->delete();
        if($finance){
            return redirect()->route('finance_index');
        }
    }
}
