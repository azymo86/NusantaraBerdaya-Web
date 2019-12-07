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

  // halaman campaign
  public function campaigns (){

    function acak($panjang)
    {
      $karakter= '123456789';
      $string = '';

      for ($i = 0; $i < $panjang; $i++)
      {
        $pos = rand(0, strlen($karakter)-1);
        $string .= $karakter{$pos};
      }
      return $string;
    }

    for ($i=0; $i < 9; $i++) {
      $angka = acak(5);
      $nominal [] = number_format($angka,0,',','.');
    }
    // dd($nominal);

    return view ('pages/campaigns', ['num'=>$nominal]);
  }

  // halaman activities
  public function activities (){

    function acak($panjang)
    {
      $karakter= '123456789';
      $string = '';

      for ($i = 0; $i < $panjang; $i++)
      {
        $pos = rand(0, strlen($karakter)-1);
        $string .= $karakter{$pos};
      }
      return $string;
    }

    for ($i=0; $i < 9; $i++) {
      $angka = acak(5);
      $nominal [] = number_format($angka,0,',','.');
    }
    // dd($nominal);

    return view ('pages/activities', ['num'=>$nominal]);
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
