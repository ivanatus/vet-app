@extends('layout')

@section('content')
    <div class="card">
      <div class="card-header text-center font-weight-bold" style="color: #334c52">
        Profili klijenata
      </div>
      <div class="card-body" style="color: #334c52">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Ime</th>
                    <th scope="col">E-mail</th>
                    <th scope="col"></th>
                </tr>
            </thead>
          <tbody>
            @foreach ($klijenti as $klijent)
                @unless ($klijent->name === 'admin')
                    <tr>
                        <th scope="row"> {{ $klijent->id }}</th>
                        <td>{{ $klijent->name }}</td>
                        <td>{{ $klijent->email }}</td>
                        <td><button type="button" class="btn btn-outline-secondary"><a href={{"delete-user/".$klijent['id']}}  style = "color: #334c52; decoration: none;">Delete</a></button></td>
                    </tr>
                @endunless
            @endforeach
          </tbody>
        </table>
      </div>
    </div>


@endsection