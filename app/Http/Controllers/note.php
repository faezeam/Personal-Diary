<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class note extends Controller
{
    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $note = new Note;
        $note->title = $request->input('title');
        $note->body = $request->input('body');
        $note->user_id = auth()->user()->id;       
        $note->save();

        return redirect('/notes')->with('success', 'Note Created');
    }
}
