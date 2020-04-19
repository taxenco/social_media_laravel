<?php

namespace App\Http\Controllers;

class ProfilesController extends Controller
{
 public function index($user)
 {
  $user = \App\User::findOrFail($user);
  return view('home', ['user' => $user]);
 }
}
