@extends('layouts.app')

@section('content')
<div class="container">
    <div class='row'>
        <div class='col-8'>
            <img src='/storage/{{$post->image}}' class='w-100'>
        </div>
        <div class='col-4'>
            <div class='d-flex align-items-center'>
                <div class='pr-3' >
                    <img src='/storage/{{$post->user->profile->image}}' class='rounded-circle'style='border-radius: 50%; height:50px !important; width:50px; object-fit: fill;'>
                </div>
                <div>
                    <div class='font-weight-bold'><a href='/profile/{{$post->user->id}}'><span class='text-dark'>{{$post->user->username}}</a>
                    
                    <a class='pl-3' href='#'>Follow</a>
                    </div>
                </div>

        </div>
        <hr>
                <p><span class='font-weight-bold'><a href='/profile/{{$post->user->id}}'><span class='text-dark'>{{$post->user->username}}</a></span> {{$post->caption}}</p>
            </div>
    </div>
</div>
@endsection
