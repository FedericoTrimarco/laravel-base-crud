@extends('layout.main')

@section('main-content')

    <div class="container mt-5 d-flex flex-column">
        <h1>Edit {{ $comic->title }}</h1>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label for="title" class="form-label fx-bold fs-3">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label fx-bold fs-3">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label fx-bold fs-3">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
            </div>

            <div class="mb-3">
                <label for="src" class="form-label fx-bold fs-3">Image</label>
                <input type="text" class="form-control" id="src" name="src" value="{{ $comic->src }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label fx-bold fs-3">Description</label>
                <textarea class="form-control" id="description" name="description" rows="10">{{ $comic->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">SAVE</button>
        </form>
    </div>

@endsection