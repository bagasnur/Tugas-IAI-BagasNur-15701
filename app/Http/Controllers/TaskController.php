<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


class TaskController extends Controller
{
    public function pangkat3($n){ 
      $hasil = $n;
      for ($i=0; $i < 2 ; $i++) {
         $hasil = $hasil * $n;
      }
      return $hasil;
    }
}