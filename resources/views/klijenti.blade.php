@extends('layout')

@section('content')
    <div class="card">
      <div class="card-header text-center font-weight-bold">
        Profili klijenata
      </div>
      <div class="card-body">
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
                        <td><a href={{"delete-user/".$klijent['id']}}>Delete</a></td>
                    </tr>
                @endunless
            @endforeach
          </tbody>
        </table>
      </div>
    </div>


@endsection