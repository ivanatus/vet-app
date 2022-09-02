@extends('layout')

@section('content')
    <div class="container">
        <h1 style="text-align: center">Dobrodošli, {{ Auth::user()->name }}!</h1>
    </div>
@endsection