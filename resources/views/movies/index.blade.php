@extends('layouts.base')

@section('content')
    <h1>Lista tutti films</h1>

    <div>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Regista</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                <tr>
                    <th>{{$movie->id}}</th>
                    <th>{{$movie->title}}</th>
                    <th>{{$movie->director}}</th>
                    <td>
                        <a href="{{route('movies.show', $movie->id)}}" class="btn btn-primary">Visualizza</a>
                        <a href="{{route('movies.edit', $movie->id)}}" class="btn btn-warning">Modifica</a>
                       
                        <form action="{{route('movies.destroy', $movie->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection