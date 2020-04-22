<?php

namespace App\Http\Controllers;

class PostsController extends Controller
{
 public function __construct()
 {
  $this->middleware('auth');
 } //Checks authorization of the user
 public function create()
 {
  return view('posts/create');
 }

 public function store()
 {
  $data = request()->validate([
   'caption' => 'required',
   'image' => ['required', 'image'],
  ]); // validates data

  $imagePath = request('image')->store('upload', 'public');

  auth()->user()->posts()->create([
   'caption' => $data['caption'],
   'image' => $imagePath,
  ]); //check user auth and post caption

  return redirect('/profile/'.auth()->user()->id); //redirects to user profile after post
 }
}
