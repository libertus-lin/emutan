<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkoringController extends Controller
{
  public function index() {
    return view('skoring.index');
  }
}
