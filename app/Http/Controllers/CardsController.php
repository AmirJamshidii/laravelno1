<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function index(){
        return view('cards/index');
    }

    // public function show($id){
    //     $card = Card::find($id);
    //     return view('cards.show' , compact('card'));
    // }

    //  or route model binding methode
   
    public function show(Card $card){
        return view('cards.show' , compact('card'));
    }
}
