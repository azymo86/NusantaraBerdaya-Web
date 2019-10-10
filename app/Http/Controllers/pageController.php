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

  public function test ()
  {
    $cek = Campaign::all();

    return view ('pages/tes', ['par'=>$cek]);
  }

  public function test_save (Request $tangkapan)
  {
    // memecah data yang ditangkap
    $title  = $tangkapan->input('judul');
    $description  = $tangkapan->input('description');

    // insert data
    Campaign::create([
      'title'       => $title,
      'description' =>  $description,
      'status'      => 'available'
    ]);

    $cek = Campaign::all();

    return view ('pages/tes', ['par'=>$cek]);
  }

}
