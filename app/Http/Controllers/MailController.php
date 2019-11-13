<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function home(){
        return view('email.home');
    }

    public function sendemail( Request $get ){
        $email = $get->email;
        $subject = $get->subject;
        $message = $get->message;

        Mail::to($email)->send(new SendEmail($subject, $message));
    }
}
