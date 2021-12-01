<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function PaymentPage(){
        return view('payment_check');
    }
    public function PaymentLastPage(){
        return view('payment_finish');
    }
}
