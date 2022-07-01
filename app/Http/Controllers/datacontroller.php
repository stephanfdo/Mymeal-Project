<?php

namespace App\Http\Controllers;

use App\Models\childranhome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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






    }



    public function searchCity(request $request)
    {
            $search_text=$request['city']?? "";
            if($search_text!=""){
                $search=childranhome::where('city','LIKE','%'.$search_text.'%')->get();
            }
            else{
                $search=childranhome::all();
            }
            
            $data=compact('search', 'search_text');


            return view('user')->with($data);


                //dd($data);
               // return redirect()->back();




    }




}
