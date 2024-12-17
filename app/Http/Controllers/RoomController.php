<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function Rooms(Request $request){
   
        return view('pages.rooms');
     }
}
