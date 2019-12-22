<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function create()
    {
        return view ('notes.create');
    }

    public function store()
    {

        $data = request()->validate([
            'title' => 'required',
            'body' => [ 'required' , 'body'],
        ]);

        dd (request()->all());
    }
}
