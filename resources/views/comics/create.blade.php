@extends('layout.main')

@section('main-content')

    <div class="container mt-5 d-flex flex-column">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label fx-bold fs-3">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label fx-bold fs-3">Series</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label fx-bold fs-3">Price</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <label for="src" class="form-label fx-bold fs-3">Image</label>
                <textarea class="form-control" id="src" name="src" rows="2"></textarea>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label fx-bold fs-3">Description</label>
                <textarea class="form-control" id="description" name="description" rows="10"></textarea>
            </div>

            <button type="submit" class="btn btn-success align-self-center">Create Comic</button>
        </form>
    </div>

@endsection