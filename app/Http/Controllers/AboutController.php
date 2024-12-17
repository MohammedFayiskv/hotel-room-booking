<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function About(Request $request){
   
        return view('pages.abouts');
     }
}
