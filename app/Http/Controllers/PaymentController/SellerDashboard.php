<?php

namespace App\Http\Controllers\PaymentController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerDashboard extends Controller
{
    public function index() {
      return view('payment.sellerDashboard');
    }
}
