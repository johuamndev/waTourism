<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lugares;


class lugarController extends Controller
{
    public function lugar(){
        $lugares = lugares::all();
        return view('lugar',['lugares'=>$lugares]) ;
    }
}

