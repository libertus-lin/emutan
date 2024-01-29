<?php

namespace App\Http\Controllers\PaymentController\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Cart extends Controller
{
    public function index() {
      return view('payment.payments.cart');
    }
}
