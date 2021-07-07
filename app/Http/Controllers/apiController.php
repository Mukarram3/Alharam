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


   $admin=new financesubmit();
   $admin->financeid=$req['financeid'];
   $admin->mobile=$req['mobile'];
   $admin->notes=$req['notes'];
   $admin->username=$req['username'];
//    return $admin;
   $save=$admin->save();
//    return $save;
   if($save){
       return 'mukarram';
   }
   else{
    return 'wdwfcdsscf';
   }

    }
}


