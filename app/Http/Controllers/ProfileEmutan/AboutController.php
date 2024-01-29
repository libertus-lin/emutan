<?php

namespace App\Http\Controllers\ProfileEmutan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
  public function index() {
    return view('profileEmutan.about.index');
  }
}
