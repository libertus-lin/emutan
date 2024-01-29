<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserHomePage extends Controller
{
  public function index() {
    return view('userHomePage.index');
  }
}
