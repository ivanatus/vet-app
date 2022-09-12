@extends('layout')

@section('title', 'Edit news')

@section('content')
<div class="container-fluid px-4">

    <div class="card mt-4">

        <div class="card-header">
            <h4>
                Edit news
            </h4>
        </div>
        <div class="card-body">
            <form action="{{ url('edited-news') }}" method="GET">
                @csrf

                <div class="mb-3">
                    <label for="">Naslov</label>
                    <input type="varchar" name="title" value="{{ $news->title }}" class="form-control" />
                </div>

                <div class="mb-3">
                    <label for="">Sadržaj</label>
                    <input type="text" name="description" class="form-control" />
                </div>

                <div class="mb-3">
                    <label for="">id</label>
                    <input type="bigint" name="id" class="form-control" />
                </div>
                <button type="submit" class="btn btn-primary">Dodaj</button>
            </form>
        </div>
    </div>
</div>
@endsection