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
      Narudžba pacijenta na pregled
    </div>
    <div class="card-body">
      <form name="narudzba-form" id="add-blog-post-form" method="post" action="{{url('store-form2')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Pacijent</label>
          <input type="text" id="pacijent" name="pacijent" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Željeno vrijeme pregleda i kratki opis simptoma. Molimo, uvažite radno vrijeme ambulante.</label>
          <textarea name="vrijeme" class="form-control" required=""></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Dodaj</button>
      </form>
    </div>
  </div>
</div>  
@endsection