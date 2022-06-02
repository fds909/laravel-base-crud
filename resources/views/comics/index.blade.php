@extends('layouts.layout')

@section('title', 'Comics List')

@section('content')
    <h1 class="text-center">Comics</h1>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Copertina</th>
                <th scope="col">Titolo</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Serie</th>
                <th scope="col">Data di uscita</th>
                <th scope="col">Tipo</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>

            <tbody>
        
        @forelse ($comics as $key => $comic)
            <tr>
                <td> <img class="cover" src="{{ $comic->thumb }}" alt="Comic Cover"> </td>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->type }}</td>
                <td>
                    <a href=" {{ route('comics.show', $comic->id) }} " type="button" class="btn btn-primary">Show</a>
                    <a href=" {{ route('comics.edit', $comic->id) }} " type="button" class="btn btn-warning">Edit</a>

                    {{-- Il delete richiede un form con metodo apposito --}}
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <h2>Non ci sono fumetti da mostrare</h2>
        @endforelse
        
            </tbody>

        </table>

    </div>
@endsection