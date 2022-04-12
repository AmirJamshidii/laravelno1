<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function home(){
        $people = ['amir', 'saeed', 'reza'];

        return view('welcome', compact('people'));    
    }
}
