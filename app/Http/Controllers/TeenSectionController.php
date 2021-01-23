<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeenSectionController extends Controller
{
    public function Teens(){
        return view('teens.home');
    }
}
