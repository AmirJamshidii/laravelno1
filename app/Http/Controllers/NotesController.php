<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\Note;


class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
        // return $request->all();
        // return request()->all();
        
        
        $note = new Note;
        $note->body = $request->body;
        $card->notes()->save($note);

        // $note = new Note(['body' => $request->body]);
        // $card->notes()->save($note);

        // $card->notes()->save(new Note(['body' => $request->body]));
        // $card->notes()->create(['body' => $request->body]);

        $note = new Note;
        $note->body = $request->body;
        


        //redirect
        // return back();
        // return redirect()->to('url');
        // return redirect('url');
        return back();

    } 
}
