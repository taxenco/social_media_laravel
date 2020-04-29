<?php

namespace App\Http\Controllers;

class FollowsController extends Controller
{
    public function store(\App\User $user)
    {
        return $user->username;
    }
}
