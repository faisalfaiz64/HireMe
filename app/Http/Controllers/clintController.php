<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignupEmail;
use Session;
use App\Models\clint;
use App\Models\seller;
use App\Models\priceplan;
use App\Models\conform_booking;
use App\Models\Feedback;
use App\Models\notf;
use App\Models\notfDetails;
use App\Models\notf_c;
use App\Models\notfDetails_c;
class clintController extends Controller
{
    public function register(Request $request)
    {
       $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            're_password' => 'required|min:6',
            'img' => 'required|mimes:jpeg,jpg,png|max:10000',
            'agree-term' => 'required',
        ]);
        $obj = new clint;
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $re_password = $request->re_password;
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
                            $type = 'clint';
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

        $obj = new clint;
        $user=$obj::where('email', $email)->where('password',$pass)->get();
        foreach($user as $row)
       {
           $userEmail=$row->email;
           $userName=$row->name;
           $id=$row->id;
           $phone=$row->phone_no;
           $img = $row->img;
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
                    session(['user'=>'clint','id'=> $id,'img'=>$img,'name'=>$userName]);
                    return redirect('/')->with('message', $userName.'! You are Logged in Successfully!');
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

    public function eventDetail($id)
    {
           $user_id = Session::get('id');

           $user_data = clint::where('id',$user_id)->get();

           $seller_data = seller::where('id',$id)->get();

           return view('eventDetails')->with('user_data',$user_data)->with('seller_data',$seller_data);
    }

    public function conformation($id,request $request)
    {
        $request -> validate([
            'pkg' => 'required',
        ]);
        $selectPackage = $request->pkg;
        $seller_data = priceplan::where('UserId',$id)->get();
        foreach ($seller_data as $data) 
        {
            if ($selectPackage == 'Basic') 
            {
                $pricetag = $data->basic_price;
                $seller_id = $data->UserId;
            }
            if ($selectPackage == 'Standard') 
            {
                $pricetag = $data->stand_price;
                $seller_id = $data->UserId;
            }
            else
            {
                $pricetag = $data->p_price;
                $seller_id = $data->UserId;
            }

        }
        
        return view('payment_detail',compact('pricetag','seller_id'));
    }
    public function done_order($id,$seller_id)
    {
        $user_id = Session::get('id');
        if ($user_id != "") 
        {
        $conform_order = new conform_booking;
        
        $order = clint::where('id',$user_id)->first();
         $status= "Pending"; 
    
        $conform_order->clint_id = $user_id;
        $conform_order->seller_id = $seller_id;
        $conform_order->name = $order->name;
        $conform_order->email = $order->email;
        $conform_order->amount = $id;
        $conform_order->status = $status;

        // $conform_order->save();


        //============== Notification store ki
        
                    $n = new notfDetails_c;

                    $n->for=$seller_id;
                    $n->msg="Your Request for Hiring a tailor is Accepted! Please Check your cart for payment";
                    $n->status="unread";
                    // $n->save();
            $unread = 0;
         //============== Total notifications me 1 + kiya
                $totalNotf = notf_c::get()->where('userId', $seller_id);
                foreach($totalNotf as $row){
                    $unread=$row->unread;
                }
                $unread=$unread+1;
                notf_c::where('userId', $seller_id)
                ->update([
                'unread' => $unread]);
        return redirect('/')->with('message', 'Your Booking Has Been Done!');
    }
    else
    {
        return view('/')->with('massage', 'Need to login first');
    }
    }

    public function clintPandingBooking()
    {
        $user_id = Session::get('id');
        $clintData = clint::where('id',$user_id)->first();
        $bookingData =conform_booking::where('clint_id',$user_id)->get();
        $sellerId = "";
        foreach ($bookingData as $data) 
        {
            $sellerId = $data->seller_id;
        }
        $sellerData = seller::where('id',$sellerId)->first();
     
        return view('clint_panding_booking',compact('bookingData','clintData','sellerData'));
    }
     public function clintCompleteBooking()
    {
        $user_id = Session::get('id');
        $clintData = clint::where('id',$user_id)->first();
        $bookingData =conform_booking::where('clint_id',$user_id)->get();
        $sellerId = "";
        foreach ($bookingData as $data) 
        {
            $sellerId = $data->seller_id;
        }
        $sellerData = seller::where('id',$sellerId)->first();
     
        return view('clint_complete_booking',compact('bookingData','clintData','sellerData'));
    }
     public function Feedback($id)
    {
        $user_id= Session::get('id');
        $data = conform_booking::where('seller_id',$id)->where('clint_id',$user_id)->first();
        $sellerData = seller::where('id',$id)->first();
        return view('feedback',compact('data','sellerData'));
    }

     public function FeedBackSave($seller_id,$clint_id, request $request)
        {
            $Feedback = new Feedback;
            $clintId = $clint_id;
            $sellerId = $seller_id; 
            $Feedback->clint_id = $clintId;
            $Feedback->seller_id = $sellerId;
            $Feedback->feedback = $request->FB;
            $Feedback->save();  
            return view('/')->with('massage','Feedback Submitted!');
        }    

    
}
