<?php

namespace App\Http\Controllers\UserDashboardController;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Events\PublishingStubs;
use Illuminate\Http\Request;

class UserDashboard extends Controller
{
  public function dashboard() {
    return view('userDashbaord.dashboard');
  }

  public function project() {
    return view('userDashbaord.projcet');
  }

  public function userScoring() {
    return view('userDashbaord.userScoring');
  }

  public function purchase() {
    return view('userDashbaord.purchase');
  }
  public function pendingPayment() {
    return view('userDashbaord.pendingPayment');
  }

  public function purchaseHistory() {
    return view('userDashbaord.purchaseHistory');
  }

  public function purchaseHistoryPending()
  {
    return view('userDashbaord.purchaseHistoryPending');
  }
  public function funding() {
    return view('userDashbaord.profiles.funding');
  }

  public function bankAccount() {
    return view('userDashbaord.profiles.bankAccount');
  }

  public function address() {
    return view('userDashbaord.profiles.addAddress');
  }

  public function continueData() {
    return view('userDashbaord.profiles.continueData');
  }

  public function continueDataFarmer() {
    return view('userDashbaord.profiles.continueDataFarmer');
  }
}
