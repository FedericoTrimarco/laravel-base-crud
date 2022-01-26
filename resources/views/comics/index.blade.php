@extends('layout.main')

@section('main-content')

    <div class="container mt-5">
        <h1 class="text-center mb-5">COMICS LIST</h1>

        <table class="table table-striped my-5">
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>series</th>
                    <th>description</th>
                    <th>src</th>
                    <th>price</th>
                    <th colspan="3">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr>

                    <td class="fw-bold">{{ $comic->id }}</td>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td class="text-truncate" style="max-width: 350px">{{ $comic->description }}</td>
                    <td class="text-truncate" style="max-width: 350px">{{ $comic->src }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>
                        EDIT
                    </td>
                    <td>
                        DELETE
                    </td>
                    <td>
                        <a class="btn btn-success" href="{{ route('comics.show', $comic->id) }}">SHOW</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection