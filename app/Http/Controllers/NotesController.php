<?php

namespace App\Http\Controllers;
use \App\User;
use \App\Note;
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
    public function update(Note $note)
    {
     

        $data=request()->validate([
            'title'=>'required',
            'body'=>'required',
        ]
        );
       $note->update($data);
        return redirect('/profile/' . auth()->user()->id);

    }
    public function edit(Note $note)
    {
       if ($note->user_id != auth()->user()->id){
            $this->authorize('update', $note->user_id);
       }
        
        return view ('notes.edit' , compact('note'));
    }
    public function store()
    {

        $data = request()->validate( [
            'title' => 'required',
            'body' =>  'required' ,
           
        ]);

         auth()->user()->notes()->create([
             'title' =>$data['title'],
             'body' => $data['body'],
           
         ]);

             return redirect('/profile/' . auth()->user()->id);


      
        
    }
    public function show( Note $note)
     {
         
        return view('notes.show', compact('note'));
    }




    public function destroy(Note $note)
  {

       
        $note->delete($note);
       return redirect('/profile/' . auth()->user()->id);
}


}
