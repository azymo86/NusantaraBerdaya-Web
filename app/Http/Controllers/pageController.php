<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Campaign;

class pageController extends Controller
{
  // halaman depan
  public function index (){
    return view ('pages/home');
  }

}
