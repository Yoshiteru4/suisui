<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


use Illuminate\Http\Request;

class TestMailController extends Controller
{
    //

    public function send(){
        return Mail::to('souta_0119_0908@yahoo.co.jp')->send(new SendMail());
}
}
