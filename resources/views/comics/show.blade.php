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
                <p class="fs-4 my-5">{{$comic->description}}</p>
                <span class="fs-5"><strong>Price</strong>: {{$comic->price}} €</span>
            </div>
        </div>
    </div>

@endsection