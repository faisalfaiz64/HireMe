<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\clint;
use App\Models\seller;
use App\Models\sellerdata;
use App\Models\priceplan;
use App\Models\Feedback;
use App\Models\customerSupport;
use App\Models\notf;
use App\Models\notfDetails;
use App\Models\notf_c;
use App\Models\notfDetails_c;
class MainController extends Controller
{
	public function login()
    {
        return view('login');
    }
    public function logout()
    {
        session()->flush();
        return redirect('/')->with('message','You Are Logged Out.');
    }
    public function signups()
    {
        return view('signups');
    }

    public function panel(){
        $user = Session::get('user');
        $id = Session::get('id');
        if ($user == 'FreeLancer' || $user == 'Company') 
        {
        	$adm = new seller;
       		$info = $adm::where('id',$id)->first();
            $sellerdata = sellerdata::where('UserId', $id)->get();
            $priceplandata = priceplan::where('id',$id)->get()->first();
            $feedback = Feedback::where('seller_id',$id)->get();

        }
        else
        {
        	$adm = new clint;
        	$info = $adm::where('id',$id)->first();
           
        }
        if ($user == 'FreeLancer' || $user == 'Company') 
        {
            return view('profile',compact('info','sellerdata','priceplandata','feedback'));
        }
        else
        {
            return view('profile',compact('info'));
        }
        
    }
    public function SavePlans($id,Request $request)
    {
        $request -> validate([
            'basic_price' => 'required',
            'basic_title' => 'required',
            'basic_pic' => 'required',
            'basic_workhour' => 'required',

            'stand_price' => 'required',
            'stand_title' => 'required',
            'stand_pic' => 'required',
            'stand_Workhore' => 'required',

            'p_price' => 'required',
            'p_title' => 'required',
            'p_pic' => 'required',
            'p_workhour' => 'required',
        ]);

        $data= new priceplan;

        $data->UserId = $id;

        $data->basic_price = $request->basic_price;
        $data->basic_title = $request->basic_title;
        $data->basic_pic = $request->basic_pic;
        $data->basic_workhour = $request->basic_workhour;
        $data->basic_location = $request->basic_location;
        $data->basic_poses = $request->basic_poses;
        $data->basic_edit = $request->basic_edit;
        $data->basic_Sfile = $request->basic_Sfile;
        $data->basic_Dpic = $request->basic_Dpic;
        $data->basic_completeIn = $request->basic_completeIn;

        $data->stand_price = $request->stand_price;
        $data->stand_title = $request->stand_title;
        $data->stand_pic = $request->stand_pic;
        $data->stand_workhour = $request->stand_Workhore;
        $data->stand_location = $request->stand_location;
        $data->stand_poses = $request->stand_poses;
        $data->stand_edit = $request->stand_edit;
        $data->stand_Sfile = $request->stand_Sfile;
        $data->stand_Dpic = $request->stand_Dpic;
        $data->stand_completeIn = $request->stand_completeIn;

        $data->p_price = $request->p_price;
        $data->p_title = $request->p_title;
        $data->p_pic = $request->p_pic;
        $data->p_workhour = $request->p_workhour;
        $data->p_location = $request->p_location;
        $data->p_poses = $request->p_poses;
        $data->p_edit = $request->p_edit;
        $data->p_Sfile = $request->p_Sfile;
        $data->p_Dpic = $request->p_Dpic;
        $data->p_completeIn = $request->p_completeIn;

        $data->save();

        return redirect('/panel')->with('message', 'Your Plans Add Successfully!');
    }

     public function search(Request $req)
    {
        $searchType=$req->inlineFormCustomSelectType;
        $searchLocation=$req->inlineFormCustomSelectLoc;
        $searchPrice =$req->inlineFormPriceSelect;

        if ($searchPrice > 0 && $searchPrice < 5000) 
        {
            $first = 1000;
            $second = 5000;
        }
        elseif ($searchPrice > 5000 && $searchPrice < 10000) 
        {
            $first = 1000;
            $second = 5000;
        }
        elseif ($searchPrice > 10000 && $searchPrice < 15000) 
        {
            $first = 10000;
            $second = 15000;
        }
        elseif ($searchPrice > 15000 && $searchPrice < 20000) 
        {
            $first = 15000;
            $second = 20000;
        }
        elseif ($searchPrice > 20000 && $searchPrice < 25000) 
        {
            $first = 20000;
            $second = 25000;
        }
        elseif ($searchPrice > 25000 && $searchPrice < 30000) 
        {
            $first = 25000;
            $second = 30000;
        }
        elseif ($searchPrice > 30000) 
        {
            $first = 30000;
            $second = 1000000;
        }
           $profiles = new seller;
           $priceRange = priceplan::whereBetween('basic_price', [$first , $second])->orWhereBetween('stand_price', [$first , $second])->orWhereBetween('p_price', [$first , $second])->get();
           $data = array();
           foreach ($priceRange as $key ) 
           {
               $id = $key->id;
               $alldata=$profiles::where('id', 'LIKE',"%{$id}%")->where('role', 'LIKE', "%{$searchType}%")->where('city', 'LIKE', "%{$searchLocation}%")->get();
               array_push($data,$alldata);
           }
           $alldata=$profiles::where('role', 'LIKE', "%{$searchType}%")->where('city', 'LIKE', "%{$searchLocation}%")->get();
           if(count($data)>0)
            {
                $msg="";
            }
            else
            {
                $msg="Nothing Found";
            }
            $kw=$searchType;
            $extra=array('msg'=>$msg, 'kw'=>$kw);

            return view('SearchResult',compact('data'),compact('extra'));   
         
    }

    public function ShowProfile($id)
    {
        $info = seller::find($id);
        $sellerdata = sellerdata::where('UserId', $id)->get();
        $priceplandata = priceplan::where('id',$id)->first();
        $feedback = Feedback::where('seller_id',$id)->get();
        return view('ShowProfile',compact('info','sellerdata','priceplandata','feedback'));
    }

    public function support(Request $req)
    {
        $req -> validate([
            'email' => 'required|email',
            'phoneNO' => 'required',
            'subject' => 'required',
            'name' => 'required',
            'message' => 'required',
        ]);

        $obj = new customerSupport;

        $obj->name = $req->name;
        $obj->email = $req->email;
        $obj->phoneNO = $req->phoneNO;
        $obj->subject = $req->subject;
        $obj->message = $req->message;

        $obj->save();

        return redirect()->back()->with('message', 'Your Complain Has Been Send To The administration.<br>Thank You For Your Time');
    }

     public function viewNotif()
    {    
        $user=Session::get('user');
        $id=Session::get('id');
        if ($user == "FreeLancer") 
        {
            $obj= new notfDetails;
            $data=$obj::orderBy('id', 'desc')->get()->where('for', $id);
            return view('Notifications',compact('data'));
        }
        else
        {
            $obj= new notfDetails_c;
            $data=$obj::orderBy('id', 'desc')->get()->where('for', $id);
            return view('Notifications',compact('data'));  
        }
    }

    public function clearNotf (Request $req)
    {
        $user=Session::get('user');
        $id=Session::get('id');

        if ($user == "FreeLancer") 
        {
             //  Delete Notif
    $notf= new notfDetails;
    $notf::where('for', $id)->delete();
    

   //  Clear Total
    notf::where('userId', $id)
    ->update([
    'unread' => 0 ]);

    //=========================== Updating Sessions =============================
            $notf = new notf;
            $temp=$notf::where('userId', $id)->get();
            // Getting Notifications
            foreach($temp as $data)
            {
                $_unread=$data->unread;

                $_cart=$data->cart;
                
            }
            $req->session()->put('notf', $_unread);

//\==========================================================================

    return redirect()->back()->with('message','Notifications Cleared!');
        }
        else
        {
             //  Delete Notif
    $notf= new notfDetails_c;
    $notf::where('for', $id)->delete();
    

   //  Clear Total
    notf_c::where('userId', $id)
    ->update([
    'unread' => 0 ]);

    //=========================== Updating Sessions =============================
            $notf = new notf_c;
            $temp=$notf::where('userId', $id)->get();
            // Getting Notifications
            foreach($temp as $data)
            {
                $_unread=$data->unread;

                $_cart=$data->cart;
                
            }
            $req->session()->put('notf', $_unread);

//\==========================================================================

    return redirect()->back()->with('message','Notifications Cleared!');
        }
   

    }

    public function verifyUser()
    {
        $verification_code = \Illuminate\Support\Facades\Request::get('code');
        $user = clint::where('verification_code',$verification_code)->first();
        if ($user != null) 
        {
            $user->is_verified = 1;
            $user->save();
            return redirect('/login')->with('message','Your Account Is verified. Please Login!');
        }
        else
        {
            return redirect('/login')->with('message','Something Wrong With Your Verification Code.');
        }
    }

    public function verifyseller()
    {
        $verification_code = \Illuminate\Support\Facades\Request::get('code');
        $user = seller::where('verification_code',$verification_code)->first();
        if ($user != null) 
        {
            $user->is_verified = 1;
            $user->save();
            return redirect('/login')->with('message','Your Account Is verified. Please Login!');
        }
        else
        {
            return redirect('/login')->with('message','Something Wrong With Your Verification Code.');
        }
    }

}
