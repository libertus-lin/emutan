<?php

namespace App\Http\Controllers\Komoditas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KedelaiController extends Controller
{
    public function index() {
      return view('komoditas.kedelai.index');
    }
}
