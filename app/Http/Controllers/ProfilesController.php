<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
 public function index(\App\User $user)
 {
  return view('profiles.index', compact('user'));
 }

 public function edit(\App\User $user)
 {
  $user = $user->profile;
  return view('profiles.edit', compact('user'));
 }

 public function update(\App\User $user)
 {
  $this->authorize('update', $user->profile); //allows only authorized users to access

  $data = request()->validate([
   'title' => 'required',
   'description' => 'required',
   'url' => 'url',
   'image' => '',
  ]); // Validates form

  if (request('image')) {
   $imagePath = request('image')->store('profile', 'public');

   $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);

   $image->save();

   $imageArray = ['image' => $imagePath]; // set previous image when edit profile

  }

//   dd(array_merge($data, ['image' => $imagePath]));
  auth()->user()->profile->update(array_merge($data, $imageArray ?? []));

  return redirect("/profile/{$user->id}");
 }

}
