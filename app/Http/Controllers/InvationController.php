<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvationController extends Controller
{

    public function Index(Request $reques){
        return view('invation');
    }
}
