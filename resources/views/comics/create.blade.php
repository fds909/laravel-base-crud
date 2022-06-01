@extends('layouts.layout')

@section('title', 'Crea Nuovo')

@section('content')
    <main>
        <div class="container text-center">
            <h1 class="text-center">Crea Nuovo Comic</h1>

            <form action="{{ route('comics.store') }}" method="POST">
                @csrf

                <div class="row mb-3">
                    <div class="col-4">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" id="title" class="form-control" name="title" required>
                    </div>

                    <div class="col-4">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" id="price" class="form-control" min="0" step=".01" name="price" required>
                    </div>

                    <div class="col-4">
                        <label for="type" class="form-label">Type</label>
                        <select id="type" class="form-select" name="type">
                            <option value="comic book">comic book</option>
                            <option value="graphic novel">graphic novel</option>
                        </select>
                    </div>

                    <div class="col-4">
                        <label for="sale-date" class="form-label">Sale Date</label>
                        <input type="date" id="sale-date" class="form-control" name="sale_date" required>
                    </div>

                    <div class="col-4">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" id="series" class="form-control" name="series" required>
                    </div>

                    {{-- offset --}}
                    <div class="col"></div>

                    <div class="col-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" placeholder="Leave a description here" name="description"></textarea>
                    </div>

                    <div class="col-12">
                        <label for="thumb" class="form-label">Thumbnail url</label>
                        <input type="url" id="thumb" class="form-control" name="thumb" required>
                    </div>

                    <div class="col 6 mt-4 mb-3">
                        <button type="submit" class="btn btn-primary">Invia</button>
                    </div>
                </div>

            </form>
        </div>
    </main>
@endsection