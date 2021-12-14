<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterMail;
use App\User;

class RegisterMailController extends Controller
{
    //
    public function send(){
        $users = User::get();
        return Mail::to($users)->send(new RegisterMail());
}
}
