@extends('layout')

@section('content')
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
                 background-position: center;">
            <div class="w-75">
                <div class="">
                    <h1 style="font-family: 'Times New Roman', serif; text-align: center;">Novosti</h1>
                </div>
                <div class="">
                        @foreach ($novosti as $novost)
                        <div class="container">
                            <h4>{{ $novost->title }}
                        </div>
                        <p>{{ $novost->description }}</p>
                        @auth
                            @if (Auth::user()->name === 'admin')
                            <a href={{"edit-news/".$novost['id']}}>Edit</a>
                                <a href='/{{"delete-news/".$novost['id']}}' style="text-align: center;">Delete</a>
                            @endif
                        @endauth
                    @endforeach
                </div>
            </div>
            <div class="my-auto">
                <div class="d-flex justify-content-around p-1">
                <img src="https://scontent-vie1-1.xx.fbcdn.net/v/t1.6435-9/66612595_2163211773976625_6242292364061179904_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=e3f864&_nc_ohc=-M8_SnkboJsAX9f1IjK&_nc_ht=scontent-vie1-1.xx&oh=00_AT9L-bexi10MOuaXCP-hCj52YMhHNQlXExD_4KTOWgh1Tw&oe=632D493A"  width="60%"></a>
                </div>                   
            </div>
        </div>
    </div>
@endsection