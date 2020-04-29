@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
        <img src='{{$user->profile->profileImage()}}' alt="avatar" style='border-radius: 50%; height:150px !important; width:200px; object-fit: fill;' >
        </div>
        <div class="col-9">
            <div class='d-flex justify-content-between  align-items-baseline'>
                <div class='d-flex'>
                <h1 class='pr-5'>{{$user->username}}</h1>
                <follow-button user-id='{{$user->id}}'></follow-button>
                </div>

            @can('update', $user->profile)

                <a href='/p'>Add New Post</a>
                @endcan

            </div>
            @can('update', $user->profile)
                <a href='/profile/{{$user->id}}/edit'>Edit Profile</a>
            @endcan
            <div class='d-flex flex-wrap: wrap'>
                <div ><strong>{{$user->posts->count()}}</strong> Post</div>
                <div class='pl-2'><strong>23k</strong> Followers</div>
                <div class='pl-2'><strong>212</strong> Following</div>
            </div>
            <div class="pt-4 font-weight-bold"><a href="https://github.com/taxenco/social_media_laravel">{{$user->profile->title}}</a></div>
            <!-- <div class="pt-4 font-weight-bold">@CarlosBeltran</div> -->
            <div>{{$user->profile-> description}}</div>
            <a href='{{$user->url}}'>{{$user->profile->url}}</a>
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
