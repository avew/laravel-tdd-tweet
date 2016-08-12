<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;

class UserController extends Controller
{
    
    public function show($username)
    {
        $user = User::findByUsername($username);
        return view('users.show', ['user' => $user]);
    }
}
