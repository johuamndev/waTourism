<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lugares;

class lugaresController extends Controller
{


    public function index(){
        $lugares = lugares::all();
        return view('lugares',['lugares'=>$lugares]) ;
    }
}
