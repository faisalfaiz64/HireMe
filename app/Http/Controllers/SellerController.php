<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignupEmail;
use App\Models\clint;
use App\Models\seller;
use App\Models\sellerdata;
use App\Models\conform_booking;
use App\Models\Bookingcharger;
use App\Models\Feedback;
use App\Models\notf;
use App\Models\notfDetails;
class SellerController extends Controller
{
    public function register(Request $request)
    {
       $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            're_password' => 'required|min:6',
            'img' => 'required|mimes:jpeg,jpg,png|max:10000',
            'joinas' => 'required',
            'city' => 'required',
            'role' => 'required',
            'agree-term' => 'required',
        ]);
        $obj = new seller;
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $re_password = $request->re_password;
        $city = $request->city;
        $role = $request->role;
        $joinas = $request->joinas;
        if ($request->hasfile('img')) {
            $file = $request->file('img');
            $extension = $file->getclientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/members/',$filename);
            $obj->img = $filename;
        }
        else 
        {
            return $request;
            $obj->img = '';
        }
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
                    if (Session::get('user')) 
                    {
                        return redirect('/dashboard')->with('message', $email.' is already exist!');
                    }
                    else
                    {
                        return redirect('/signups')->with('message', $email.' is already exist!');
                    }
                }
                else
                {
                    $obj->name = $name;
                    $obj->email = $email;
                    $obj->password =$password;
                    $obj->type =$joinas;
                    $obj->city =$city;
                    $obj->role =$role;
                    $obj->verification_code = sha1(time());
                    $obj->save();
                    if (Session::get('user'))
                    {
                        return redirect('/dashboard')->with('message', $name.'!  Added Successfully!');
                    }
                    else
                    {
                        if ($obj != null) 
                        {
                            $type = 'seller';
                            MailController::sendEmail($obj->name,$obj->email,$obj->verification_code,$type);
                            return redirect('/login')->with('message', $name.'! You are Registered Successfully! Please check verification Mail!');
                        }
                    }
                }
            }
            else
            {
                if (Session::get('user')) 
                {
                $error=true;
                   return redirect('/dashboard')->with('message','404');
                }
                else
                {
                $error=true;
                return redirect('/signups')->with('message','404');
                }
            }
        }
        else
        {
            $error=true;
            return redirect('/signups')->with('message','Your Password Doesnot Match. Please Check Your Password!');
        }
    }

    public function validatelogin(Request $request)
    {
        $request -> validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $userName="";
        $email= $request->email;
        $pass= $request->password;

        $obj = new seller;
        $user=$obj::where('email', $email)->where('password',$pass)->get();
        foreach($user as $row)
       {
           $userEmail=$row->email;
           $userName=$row->name;
           $id=$row->id;
           $type=$row->type;
           $city = $row->city;
           $img = $row->img;
           $role = $row->role;
           $is_verified = $row->is_verified; 
       }
        if($userName!="")
        { 
            if ($is_verified == 1) 
            {
                $unread="none";
            $read="none";
    //Set and Get Notifications =======================
            $notf = new notf;
            $temp=$notf::where('userId', $id)->get();
            // Getting Notifications
            foreach($temp as $data)
             {
                 $unread=$data->unread;
                 $read=$data->read;
                 
             }
            //  agr record hai hi ni
             if($unread=="none")
             {
                $notf->userId=$id;
                $notf->unread=0;
                $notf->read=0;
                $notf->msgs=0;

                $notf->save();
             }

             //Set Session
                $request->session()->put('notf', $unread);
            if ($type == 'Individual') 
            {
                session(['user'=>'FreeLancer','id'=> $id,'img'=>$img,'name'=>$userName]);
                return redirect('/')->with('message', $userName.'! You are Logged in Successfully!');
            }
            else
            {
                session(['user'=>'Company','id'=> $id,'img'=>$img,'name'=>$userName,]);
                return redirect('/')->with('message', $userName.'! You are Logged in Successfully!');
            }            
            }
            else
            {
                return redirect('/login')->with('message','Your Email Is Not Verified. Please Verified it First Then Login!');
            }
        }
        else
        {
            $error=true;
            return redirect('/login')->with('message','404');
        }
    }

    public function storefile(request $request)
    {
        $user_id = Session::get('id');
        if ($request->hasfile('file')) 
        {
            foreach ($request->file as $file) 
            {
                $filename = $file->getClientOriginalName();
              
                $file->move('images/upload_images',$filename);
                $filemodel = new sellerdata;
                $filemodel->name = $filename;
                $filemodel->UserId = $user_id;
                $filemodel->save();
            }
            return redirect()->back();
        }
    }

    public function priceform($id)
    {
        $adm = new seller;
        $info = $adm::where('id',$id)->first();
        return view("priceform")->with('info',$info);
    }

    public function sellerPendingBooking()
    {
        $user_id = Session::get('id');
        $sellerData = seller::where('id',$user_id)->first();
        $bookingData =conform_booking::where('seller_id',$user_id)->get();
        $sellerId = "";
        foreach ($bookingData as $data) 
        {
            $clintId = $data->clint_id;
        }
        $clintData = clint::where('id',$clintId)->first();
     
        return view('seller_pending_booking',compact('bookingData','clintData','sellerData'));
    }
    public function sellerAcceptedBooking()
    {
        $user_id = Session::get('id');
        $sellerData = seller::where('id',$user_id)->first();
        $bookingData =conform_booking::where('seller_id',$user_id)->get();
        $sellerId = "";
        foreach ($bookingData as $data) 
        {
            $clintId = $data->clint_id;
        }
        $clintData = clint::where('id',$clintId)->first();
     
        return view('seller_accpted_booking',compact('bookingData','clintData','sellerData'));
    }

    public function acceptBooking($id)
    {
                $cid=$id;
                $newStatus="Accepted";   
                $Cust = "";
                conform_booking::where('clint_id', $cid)
                ->update([
                'status' => $newStatus ]);
                    $appointment = conform_booking::get()->where('clint_id', $cid);
                    foreach($appointment as $row){
                        $Cust=$row->clint_id;                                           
                    }                 
                    $charges = new Bookingcharger;

                    $charges->clintId=$Cust;
                    $charges->bookingId=$cid;
                    $charges->charges=200;
                    $charges->status="unpaid";
                    $charges->save();


        //============== Notification store ki
        
                    $n = new notfDetails;

                    $n->for=$Cust;
                    $n->msg="Your Request for Hiring is Accepted!";
                    $n->status="unread";
                    $n->save();
            
         //============== Total notifications me 1 + kiya
                $totalNotf = notf::get()->where('userId', $Cust);
                foreach($totalNotf as $row){
                    $unread=$row->unread;
                    $cartQ=$row->cart;
                }
                $unread=$unread+1;
                notf::where('userId', $Cust)
                ->update([
                'unread' => $unread]);
        return redirect()->back()->with('message', 'Accepted Successfully! A notification is sent to the user');
        
    }

    public function add_disciption(Request $request)
    {
        $description = $request->Description;
        $user_id = Session::get('id');
        seller::where('id', $user_id)
                ->update([
                'description' => $description ]);
        return redirect()->back();
    }

    
}
