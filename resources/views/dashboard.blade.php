@extends('layout')

@section('content')
    <div class="container" style="padding-top: 1em">
        <h1 style="text-align: center">Dobrodošli, {{ Auth::user()->name }}!</h1>
        <img src="https://z-p3-scontent-sof1-2.xx.fbcdn.net/v/t1.15752-9/305803173_648267196519245_6988237217487290419_n.png?_nc_cat=100&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeFTtLlWn-dBh1gi4He0pHevph0wEiumqf-mHTASK6ap__W1BRDcO3ouAd9LdnZQ_kDQ3LIZW85JhYZ5tlz95NHv&_nc_ohc=aAgu178477kAX_fHJZL&_nc_ht=z-p3-scontent-sof1-2.xx&oh=03_AVJqWqGLn_MipHfg1Y3fZD5A32KTMZ9tJb986G9-6TCk5w&oe=633F8980" style="width: 80%; position: fixed; bottom: 3">
    </div>
@endsection