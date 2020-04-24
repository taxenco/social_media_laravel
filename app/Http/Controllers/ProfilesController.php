<?php

namespace App\Http\Controllers;

class ProfilesController extends Controller
{
 public function index(\App\User $user)
 {
  return view('profiles.index', compact('user'));
 }

 public function edit(\App\User $user)
 {
  $user = \App\User::findOrFail($user);
  return view('profiles.edit', compact('user'));
 }

 
 public function update(\App\User $user)
 {
    $data = request()->validate([
        'title'=> 'required',
        'description'=> 'required',
        'url'=> 'url',
        'image'=> '',
        ]);
    $user->profile->update($data);
    return redirect("/profile/{$user->id}");
 }

}
