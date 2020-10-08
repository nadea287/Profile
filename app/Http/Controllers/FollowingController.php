<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FollowingController extends Controller
{
    public function show(User $user)
    {
        return view('follow' . $user->id);
    }
}
