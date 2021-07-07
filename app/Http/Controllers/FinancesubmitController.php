<?php

namespace App\Http\Controllers;

use App\Models\finance;
use App\Models\financesubmit;
use Illuminate\Http\Request;

class FinancesubmitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=financesubmit::with('hasfinance')->get();

        return view('finance_users.index',compact('data'));

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\financesubmit  $financesubmit
     * @return \Illuminate\Http\Response
     */
    public function show(financesubmit $financesubmit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\financesubmit  $financesubmit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=financesubmit::find($id);
        $finance=finance::all();
        return view('finance_users.edit',['data' => $data],compact('finance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\financesubmit  $financesubmit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {

        $req->validate([
            'finance' => 'required',
            'mobile' => 'required',
            'notes' => 'required',
            'name' => 'required'
        ]);
// return $req->all();
        $admin=financesubmit::find($req->id);
    $admin->financeid =$req->finance;
    $admin->mobile=$req->mobile;
    $admin->notes=$req->notes;
    $admin->username=$req->name;
    $save=$admin->save();

    if($save){
        return redirect()->route('finance_user_index');;
    }
    else{
        return 'cannot edit user data';
    }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\financesubmit  $financesubmit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=financesubmit::find($id);
        $delete=$user->delete();
        if($delete){
            return redirect()->route('finance_user_index');
        }
        else{
            return 'cannot delete user data';
        }
    }
}
