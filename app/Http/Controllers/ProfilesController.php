<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
class ProfilesController extends Controller
{
    public function show($user)
    {
       $user= User::findorfail($user);
        return view('home' , ['user' => $user]);
    }
}
