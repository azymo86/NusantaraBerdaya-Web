<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Campaign;

class campaignController extends Controller
{

  public function show ()
  {
    $cek = Campaign::all();

    return view ('pages/tes', ['par'=>$cek]);
  }

  public function save (Request $data)
  {
    // memecah data yang ditangkap
    $title  = $data->input('judul');
    $description  = $data->input('description');

    // insert data
    Campaign::create([
      'title'       => $title,
      'description' =>  $description,
      'status'      => 'available'
    ]);

    $cek = Campaign::all();

    return view ('pages/tes', ['par'=>$cek]);
  }

  public function update ()
  {
    $cek = Campaign::all();

    return view ('pages/tes', ['par'=>$cek]);
  }

  public function close ()
  {
    $cek = Campaign::all();

    return view ('pages/tes', ['par'=>$cek]);
  }

}
