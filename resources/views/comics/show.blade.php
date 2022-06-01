@extends('layouts.layout')

@section('title', 'Comic Details')

@section('content')
    <div class="container">
        <h1 class="text-center">{{ $comic->title }}</h1>

        <div class="card text-center">
            <div class="card-body">
                <img src="{{ $comic->thumb }}" alt="">
                <h5>Price: {{ $comic->price }} $</h5>
                <p class="card-text">{{ $comic->description }}</p>
                <h6 class="card-text">Series: {{ $comic->series }}</h6>
                <h6 class="card-text">Type: {{ $comic->type }}</h6>
                <a href="{{ route('comics.index') }}" class="btn btn-primary">Go back to comics</a>
            </div>
            <div class="card-footer text-muted">Sale date: {{ $comic->sale_date }}</div>
        </div>
    </div>
@endsection