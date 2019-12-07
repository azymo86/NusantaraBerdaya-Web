<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Campaign;

class adminController extends Controller
{
  // halaman Dashboard
  public function dashboard (){
    return view ('admin/dashboard');
  }
}
