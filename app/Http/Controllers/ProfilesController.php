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
  $this->authorize('update', $user->profile); //allows only authorized users to access 

  return view('profiles.edit', compact('user'));
 }

 public function update(\App\User $user)
 {
  $this->authorize('update', $user->profile);  //allows only authorized users to access 

  $data = request()->validate([
   'title' => 'required',
   'description' => 'required',
   'url' => 'url',
   'image' => '',
  ]); // Validates form
  auth()->user()->profile->update($data);
  return redirect("/profile/{$user->id}");
 }

}
