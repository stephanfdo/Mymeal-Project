<?php

namespace App\Http\Controllers;

use App\Models\childranhome;
use App\Models\users;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;

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


    public function userdata(Request $request){


       try{


        $form=new users();
        $form->name=$request->uname;
        $form->email=$request->email;
        $form->password=$request->password;

        $form->save();
        return redirect()->back()->with('message', 'Successfully registered please login!');
       }catch(QueryException $e){
        return redirect()->back()->with('message', 'Invalid SingUp, The email already used!');
       }
        }




public function loginvalidate(Request $request){

    $form = users::where('email', request('email'))->first();
    $name=$form->name;
    $email=$form->email;


    if($form==null){
        return redirect()->back()->with('message', 'Invalid login!');
    }

 else if ($form->password==$request->password){
    $request->session()->put('email', $email);
    $request->session()->put('name', $name);

    return redirect(route('user.view',$name));
}
else{
    return redirect()->back()->with('message', 'Invalid login!');
}



}



public function searchwelcome(request $request)
    {
            $search_text=$request['city']?? "";
            if($search_text!=""){
                $search=childranhome::where('city','LIKE','%'.$search_text.'%')->get();
            }
            else{
                $search=childranhome::all();
            }

            $data=compact('search', 'search_text');


            return view('welcome')->with($data);


                //dd($data);
               // return redirect()->back();




    }









}

