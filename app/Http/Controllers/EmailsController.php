<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\AttachmentMail;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;

class EmailsController extends Controller
{
    public function email(){
        return new AttachmentMail();
    }

    public function emailPost(Request $request){
        Mail::to($request->email)->send(new WelcomeMail($request));


    if (Mail::failures()) {
        return "NO";
    }
        return "OK";
    }
}
