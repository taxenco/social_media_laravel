@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
        <img src='https://image.flaticon.com/icons/svg/978/978012.svg' style="max-height:120px">
        </div>
        <div class="col-9">
            <div><h1>{{$user->username}}</h1></div>
            <div class='d-flex flex-wrap: wrap'>
                <div ><strong>153</strong> Post</div>
                <div class='pl-2'><strong>23k</strong> Followers</div>
                <div class='pl-2'><strong>212</strong> Following</div>
            </div>
            <div class="pt-4 font-weight-bold"><a href="https://github.com/taxenco/social_media_laravel">{{$user->profile->title}}</a></div>
            <!-- <div class="pt-4 font-weight-bold">@CarlosBeltran</div> -->
            <div>{{$user->profile->description}}</div>
        </div>
    </div>
    <div class='row pt-5'>
            <div class='col-4'>
                <img src='https://d1e00ek4ebabms.cloudfront.net/production/5ef58065-846b-488e-8bb3-92bcf9c2c73a.jpg' class='w-100 h-100 responsive'>
            </div>
            <div class='col-4'>
                <img src='https://talksport.com/wp-content/uploads/sites/5/2018/04/salah_3.jpg?strip=all&quality=100&w=700&quality=100' class='w-100 h-100 responsive'>
            </div>
            <div class='col-4'>
                <img src='https://d2x51gyc4ptf2q.cloudfront.net/content/uploads/2019/01/06101508/Alexis-Sanchez-Manchester-United.jpg' class='w-100 h-100 responsive'>
    </div>
</div>
@endsection
