<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vehiclecategory;
use App\Models\vehicletype;
use App\Models\financesubmit;
use App\Models\finance;

class apiController extends Controller
{
    public function index1()
    {
       
        $vehiclecategory=vehiclecategory::all();
       
        return $vehiclecategory;
    }
    public function index2(Request $req)
    {
        $vehicletype=vehicletype::where('vehicleId','=',$req->id)->get();
        // $vehiclecategory=vehiclecategory::all();
        return $vehicletype;
    }

    public function index3(){
        $finance=finance::all();
    
        return $finance;
    }

    public function formdatstore(Request $req){

   $table=new financesubmits();
   $table->financeid=$req->financeid;
   $table->mobile=$req->mobile;
   $table->notes=$req->notes;
   $table->username=$req->username;

   $save=$table->save();
   if($save){
       return 'mukarram';
   }
   else{
    return 'wdwfcdsscf';
   }

    }
}


