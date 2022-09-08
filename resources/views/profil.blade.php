@extends('layout')

@section('content')
@if (Auth::user()->name === 'admin')
    <div class="container mt-4">
      @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
      @endif
      <div class="card">
        <div class="card-header text-center font-weight-bold" style="color: #334c52">
          Upis u povijest bolesti
        </div>
        <div class="card-body" style="color: #334c52">
          <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form3')}}">
          @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Pacijent</label>
              <input type="text" id="User" name="User" class="form-control" required="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">id</label>
              <input type="text" id="id" name="id" class="form-control" required="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Bolest</label>
              <textarea name="bolest" class="form-control" required=""></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tretman</label>
              <textarea name="tretman" class="form-control" required=""></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Datum tretmana</label>
              <input type="text" id="datum" name="datum" class="form-control" required="">
            </div>

            <button type="submit" class="btn btn-primary">Dodaj</button>
          </form>
        </div>
      </div>
    </div>  
  @endif
<br>
<div class="card">
  <div class="card-header" style="color: #334c52">
    <h4 style="text-align:center">Povijest bolesti</h4>
  </div>
  <div class="card-body" style="color: #334c52">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Bolest</th>
          <th scope="col">Tretman</th>
          <th scope="col">Datum tretmana</th>
        </tr>
      </thead>
      <tbody>
          @if (Auth::user()->name === 'admin')
            @foreach ($illness as $illdata)
            <tr>
              <th scope="row"> {{ $illdata->id }}, {{ $illdata->User }}</th>
              <td>{{ $illdata->bolest }}</td>
              <td>{{ $illdata->tretman }}</td>
              <td>{{ $illdata->datum }}</td>
            </tr>
            @endforeach
          @else
            @foreach ($illness as $illdata)
              @if(Auth::user()->name === $illdata->User)
                <tr>
                  <th scope="row"> {{ $illdata->id }}</th>
                  <td>{{ $illdata->bolest }}</td>
                  <td>{{ $illdata->tretman }}</td>
                  <td>{{ $illdata->datum }}</td>
                </tr>
              @endif
            @endforeach
          @endif
      </tbody>
    </table>
  </div>
</div>
@endsection