<?php

namespace App\Http\Controllers\PaymentController\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Payment extends Controller
{
    public function index() {
      return view('payment.payments.payment');
    }
}
