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
            <h1>{{ $book->book }}</h1>
            <p><strong>Író:</strong> {{ $book->author }}</p>
            <p><strong>Megjelenési év:</strong> {{ $book->publication_year }}</p>
            <p><strong>Elérhető példányszám:</strong> {{ $book->available_copies }}</p>

            @if(Auth::check() && Auth::user()->role === 'user')
                <form action="{{ route('borrowings.store', $book->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Foglalás</button>
                </form>
            @endif
        </div>
    @endsection
</body>
</html>