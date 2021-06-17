<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function About()
    {
        return view('about');

    }


    public function Contract()
    {
        return view('contract');

    }


    public function Vehicle()
    {
        return view('user.vehicle');
    }

    public function Driver()
    {
        return view('user.driver');
    }

    //category
    public function StoreVehicle(Request $request)
    {
        $data=array();
        $data['vname']=$request->vname;
        $data['voname']=$request->voname;
        $data['voaddress']=$request->voaddress;
        $data['vcontract']=$request->vcontract;
        $data['icompany']=$request->icompany;
        $data['lisssu_date']=$request->lisssu_date;
        $data['vtype']=$request->vtype;
        $data['pervehicle']=$request->pervehicle;
        $data['Validity']=$request->Validity;
        $data['bfitness']=$request->bfitness;
        $data['rpremit']=$request->rpremit;
        $vehicle=DB::table('vehicles')->insert($data);
       
    // return response()->json($data);
        //echo "<pre>";
        //print_r($data);
        if ($vehicle) {
            $notification=array(
                'messege'=>'Successfully vehicle Incerted',
                'alert-type'=>'success'
                );
            return Redirect()->back()->with($notification);
        }else{
            $notification=array(
                'messege'=>'Something is Worng!',
                'alert-type'=>'error'
                );
            return Redirect()->back()->with($notification);

        }

    }

   

}
