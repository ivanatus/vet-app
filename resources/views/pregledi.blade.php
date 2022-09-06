@extends('layout')

@section('content')
  @unless (Auth::user()->name === 'admin')
    <div class="container mt-4 bg-#76a5b0">
    @if(session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
    @endif
    <div class="card bg-#76a5b0">
      <div class="card-header text-center font-weight-bold" style="color: #334c52">
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
  @endunless
<br>
  @if (Auth::user()->name === 'admin')
    <div class="card bg-#76a5b0">
      <div class="card-header text-center font-weight-bold" style="color: #334c52">
        Pregledi
      </div>
      <div class="card-body" style="color: #334c52">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Pacijent</th>
              <th scope="col">Vrijeme i simptomi</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pregled as $narudzba)
              <tr>
              <th scope="row"> {{ $narudzba->id }}</th>
              <td>{{ $narudzba->pacijent }}</td>
              <td>{{ $narudzba->vrijeme }}</td>
              <td><a href={{"delete-pregled/".$narudzba['id']}}>Delete</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  @endif

@endsection