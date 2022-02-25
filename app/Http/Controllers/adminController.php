<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\clint;
use App\Models\seller;
use App\Models\conform_booking;
use App\Models\customerSupport;
class adminController extends Controller
{
    public function register(Request $request)
    {
       $request->validate([
            'email' => 'required|email',
            'psw' => 'required|min:6',
            'psw_repeat' => 'required|min:6',
        ]);
        $obj = new admin;
        $email = $request->email;
        $password = $request->psw;
        $re_password = $request->psw_repeat;
        $userEmail = "";
        if ($password == $re_password ) 
        {
            if ($email != "")
            {
                $useremail = $obj::where('email', $email)->get();
                foreach($useremail as $row)
                {
                   $userEmail=$row->email;
                }
                if ($userEmail == $email) 
                {                
                    return redirect('/adminsig')->with('message', $email.' is already exist!');
                }
                else
                {
                    $obj->email = $email;
                    $obj->password =$password;
                    $obj->repassword =$re_password;
                    $obj->save();
                        return redirect('/adminlogin')->with('message', $email.'! You are Registered Successfully!'); 
                }
            }
            else
            {         
                $error=true;
                return redirect('/adminsig')->with('message','404');
            }
        }
    }
    public function validatelogin(Request $request)
    {
        $request -> validate([
            'email' => 'required',
            'psw' => 'required',
        ]);
        $userName="";
        $email= $request->email;
        $pass= $request->psw;

        $obj = new admin;
        $user=$obj::where('email', $email)->where('password',$pass)->get();
        foreach($user as $row)
       {
           $userEmail=$row->email;
           $id=$row->id;
       }
        if($userEmail!="")
        { 
                session(['user'=>'admin','id'=> $id,'email'=>$userEmail]);
                return redirect('/admin')->with('message', $userEmail.'! You are Logged in Successfully!');       
        }
        else
        {
            $error=true;
            return redirect('/adminlogin')->with('message','404');
        }
    }
    public function logout()
    {
        session()->flush();
        return redirect('/adminlogin')->with('message','You Are Logged Out.');
    }

    public function all_user()
    {
        $mpost = clint::all();
        return view('admin.all_user')->with('mpost',$mpost);
    }

    public function freelancer()
    {
    	$type = "Individual";
        $mpost = seller::where('type',$type)->get();
        return view('admin.freelancer')->with('mpost',$mpost);
    }
    public function Phouse()
    {
    	$type = "Company";
        $mpost = seller::where('type',$type)->get();
        return view('admin.Phouse')->with('mpost',$mpost);
    }
    public function bookings()
    {
        $mpost = conform_booking::all();
        return view('admin.booking')->with('mpost',$mpost);
    }

    public function CustomerSupport()
    {
        $mpost = customerSupport::all();
        return view('admin.customerSupport')->with('mpost',$mpost);
    }

}
