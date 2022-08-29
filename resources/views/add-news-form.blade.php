@extends('layout')

@section('content')
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Dodavanje novosti na početnu stranicu
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form1')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" id="title" name="title" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <textarea name="description" class="form-control" required=""></textarea>
        </div>

        <label for="pic">Slika:</label><br>
        <input type="file" id="pic" name="pic"><br><br>

        <button type="submit" class="btn btn-primary">Dodaj</button>
      </form>
    </div>
  </div>
</div>  
@endsection