<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Campaign;

class campaignController extends Controller
{

  public function show ()
  {
    $cek    = Campaign::all();
    $title = Campaign::select('title', 'id')->get();

    return view ('pages/tes', ['par'=>$cek], ['tit'=>$title]);
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

  public function change (Request $data)
  {
    // memecah data yang ditangkap
    $id  = $data->input('id');
    $title  = $data->input('judul');

    $cek = Campaign::where('id', $id)
                    // ->update(['delayed' => 1]);
                    ->get();
                    dd($cek);

    $cek = Campaign::all();

    return view ('pages/tes', ['par'=>$cek]);
  }

  public function close ()
  {
    $cek = Campaign::all();

    return view ('pages/tes', ['par'=>$cek]);
  }

}
