<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{ public function index()
{
   $nom ="" ;
    return view('workshop' , ["name"=>$nom]);



}
}
