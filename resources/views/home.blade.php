@extends('layout')

@section('content')
<div class="container" style="padding-top: 2.5em;">
    <h2 style="color=#273a3f; text-align: left; font-weight: bold;">Novosti</h2>
    <div class="row d-flex justify-content-around" >
        <div class="width:90%;
                    mb-5
                    p-3
                    rounded-lg
                    shadow
                    d-flex
                    justify-content-between
                    align-items-baseline
                    "                
             style="background-size: 100%;
                 background-position: center; padding-left: 1em;">
            <div class="w-75">
                
                <div class="">
                        <hr />
                        @foreach ($novosti as $novost)
                        <div class="container">
                            <h4  style="color: #273a3f; font-weight: bold">{{ $novost->title }}</h4>
                        </div>
                        <p style="text-align: justify">{{ $novost->description }}</p>
                        @auth
                            @if (Auth::user()->name === 'admin')
                            <button type="button" class="btn btn-outline-secondary"><a href='{{"edit-news/".$novost['id']}}'  style = "color: #334c52">Edit</a></button>
                            <button type="button" class="btn btn-outline-secondary"><a href='{{"delete-news/".$novost['id']}}' style = "color: #334c52">Delete</a></button>
                            @endif
                        @endauth
                        <hr />
                    @endforeach
                </div>
            </div>
            <div class="my-auto">
                <div class="d-flex justify-content-around p-1">
                <img src="https://scontent-vie1-1.xx.fbcdn.net/v/t1.15752-9/305083144_398366249127376_6296215122985539006_n.png?_nc_cat=104&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeEGjX8jLZvXyzqCBiGSQXcEQNT_fTQ3395A1P99NDff3vw6SZITUyWVD1KT8oyYrMsvaGfoDUrVkibwWO9vqfh5&_nc_ohc=RYUFeWamyBAAX-Eov9_&_nc_ht=scontent-vie1-1.xx&oh=03_AVLe-UHwwv5IQq9R63TBvfd-JcB_oLCEpeboJ--JT7ZM_g&oe=633EDADA"  width="90%">
                </div>                   
            </div>
        </div>
    </div>
</div>
@endsection