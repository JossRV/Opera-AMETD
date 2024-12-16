<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function diplomado(){
        return view('modules.landings.diplomado');
    }
}
