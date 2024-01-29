<?php

namespace App\Http\Controllers\Komoditas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PadiController extends Controller
{
    public function index() {
      return view('komoditas.padi.index');
    }
}
