<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignupEmail;
use App\Mail\MainController;

class MailController extends Controller
{
   public static function sendEmail ( $name,$email,$verification_code,$type)
   {
   	$data = [
   		'name' => $name,
   		'verification_code' => $verification_code,
   		'type' => $type
   	];
   	Mail::to($email)->send(new SignupEmail($data));
   }
}