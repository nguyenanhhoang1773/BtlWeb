<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class UserController extends Controller
{
    public function getUser()
    {
       $user = User::all();
        dd($user);
    }
}
