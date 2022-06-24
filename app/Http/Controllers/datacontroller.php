<?php

namespace App\Http\Controllers;

use App\Models\childranhome;
use Illuminate\Http\Request;

class datacontroller extends Controller
{
    //

    public function addinformation(Request $request){

        $form=new childranhome();
        $form->name=$request->childrenhome;
        $form->city=$request->city;
        $form->address=$request->address;
        $form->tpno=$request->teleno;
        $form->tpno1=$request->teleno1;
        $form->file_path=$request->picture;
        $form->save();
        return redirect()->back();


        $data=childranhome::all();
        //dd($data);
       // return redirect()->back();

       return view('user')->with('data',$data);



    }
}
