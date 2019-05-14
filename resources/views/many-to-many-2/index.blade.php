<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Many to Many Relationships - Part 2</title>
</head>
<body>
    <h1>Many to Many Relationships - Part 2</h1>
    <ul>
        @foreach ($users as $user)
        <li>
            <strong>Author</strong>: {{ $user->name }}
            <a href="{{ route('getEdit', $user->id) }}">Editar</a>
            <ul>
                @foreach ($user->books as $book)
                <li>
                    <strong>{{ $book->title }}: </strong> {{ $book->description }}
                </li>
                @endforeach
            </ul>
        </li>
        @endforeach
    </ul>
</body>
</html>