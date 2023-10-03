<?php

namespace App\Http\Controllers;

use App\Models\treni;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $treniInOrario = treni::where('In_Orario', 1 )->get();

        return view('home' , compact('treniInOrario'));
    }

}
