@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
        <img src='https://image.flaticon.com/icons/svg/978/978012.svg' style="max-height:120px">
        </div>
        <div class="col-9">
            <div class='d-flex justify-content-between  align-items-baseline'>
                <h1>{{$user->username}}</h1>
                <a href='/p/create'>Add New Post</a>
            </div>
                <a href='/profile/{{$user->id}}/edit'>Edit Profile</a>
            <div class='d-flex flex-wrap: wrap'>
                <div ><strong>{{$user->posts->count()}}</strong> Post</div>
                <div class='pl-2'><strong>23k</strong> Followers</div>
                <div class='pl-2'><strong>212</strong> Following</div>
            </div>
            <div class="pt-4 font-weight-bold"><a href="https://github.com/taxenco/social_media_laravel">{{$user->profile->title}}</a></div>
            <!-- <div class="pt-4 font-weight-bold">@CarlosBeltran</div> -->
            <div>{{$user->profile->description}}</div>
        </div>
    </div>
    <div class='row pt-5'>
        @foreach($user->posts as $post)
            <div class='col-4 pb-4'>
                <a href='/p/{{$post->id}}'>
                <img src='/storage/{{$post->image}}' class='w-100 h-100 responsive'>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
