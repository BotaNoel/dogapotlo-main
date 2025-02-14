<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <h1 class="mb-4">Könyvek</h1>
            <div class="list-group">
                @foreach($books as $book)
                    <a href="{{ route('books.show', $book->id) }}" class="list-group-item list-group-item-action">
                        <h5 class="mb-1">{{ $book->book }}</h5>
                        <p class="mb-1">Író: {{ $book->author }}</p>
                        <p>Megjelenési év: {{ $book->publication_year }}</p>
                        <p>Elérhető példányszám: {{$book->available_copies}}</p>
                    </a>
                @endforeach
            </div>
        </div>
    @endsection
</body>
</html>