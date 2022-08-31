@extends('layout')

@section('content')
<div class="card">
  <div class="card-header">
    <h4 style="text-align:center">Povijest bolesti</h4>
  </div>
  <div class="card-body">
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
          @foreach ($illness as $illdata)
          <tr>
            <th scope="row"> {{ $illdata->id }}</th>
            <td>{{ $illdata->bolest }}</td>
            <td>{{ $illdata->tretman }}</td>
            <td>{{ $illdata->datum }}</td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection