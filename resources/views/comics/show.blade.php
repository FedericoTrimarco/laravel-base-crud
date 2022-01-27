@extends('layout.main')

@section('main-content')

    <div class="container mt-5 card p-3">
        <div class="row">
            <div class="col-4">
                <img src="{{$comic->src}}" alt="{{$comic->series}}" class="w-100">
            </div>
            <div class="col-8">
                <h1>{{$comic->title}}</h1>
                <span><strong>Series</strong>: {{$comic->series}}</span>
                <p class="fs-4 my-5">{!!$comic->description!!}</p>
                <span class="fs-5"><strong>Price</strong>: {{$comic->price}} €</span>
            </div>
            <div class="mt-5 d-flex">
                <a class="btn btn-primary me-4" href="{{ route('comics.edit', $comic->id) }}">EDIT</a>
                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <input
                        type="submit"
                        class="btn btn-danger"
                        value="DELETE"
                        onclick="return confirm('are you sure you want to delete this element? ({{ $comic->title }})')"
                    >
                </form>

            </div>
        </div>
    </div>

@endsection