@extends('layout.main')

@section('main-content')

    <div class="container mt-5">
        <h1 class="text-center mb-5">COMICS LIST</h1>

        {{-- messaggio di elimina --}}
        @if (session('deleted'))
            <div class="alert alert-success">
                <strong>{{ session('deleted') }}</strong>
                eliminato correttamente.
            </div>
        @endif

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
                        <a class="btn btn-success" href="{{ route('comics.show', $comic->id) }}">SHOW</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('comics.edit', $comic->id) }}">EDIT</a>
                    </td>
                    <td>
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
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection