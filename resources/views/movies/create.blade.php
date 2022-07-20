@extends('layouts.base')

@section('content')
    <h1>Crea un film</h1>
    <div>
        <form action="{{route('movies.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
            </div>
            <div class="mb-3">
                <label for="director" class="form-label">Regista</label>
                <input type="text" class="form-control" id="director" name="director" value="{{old('director')}}">
            </div>
            <div class="mb-3">
                <label for="plot" class="form-label">Descrizione</label>
                <textarea class="form-control" id="plot" name="plot">{{old('plot')}}</textarea>
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Anno</label>
                <input type="text" class="form-control" id="year" name="year" value="{{old('year')}}">
            </div>
            <button type="submit" class="btn btn-primary">Crea</button>
        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection