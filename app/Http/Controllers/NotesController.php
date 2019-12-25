<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function __construct()
    {
            $this->middleware('auth');
    }

    public function create()
    {
        return view ('notes.create');
    }

    public function store()
    {

        $data = request()->validate( [
            'title' => 'required',
            'body' =>  'required' ,
        ]);

        // $bodyPath = request('body')->store('uploads' , 'public');
        // auth()->user()->notes()->create([
        //     'title' =>$data['title'],
        //     'body' => $data['body'],
        // ]);

        //     return redirect('/notes/' . auth()->user()->id);

        $note =new\App\Note();
        $note->$title = $data('title');
        $note->$body = $data('body');
        $note->$user_id = auth()->user()->id;       
        $note->save();

        return redirect('/notes')->with('success', 'Note Created');

      
        
    }
    public function show( \App\Note $note) {
        return view('notes.show', compact('note'));
    }
}
