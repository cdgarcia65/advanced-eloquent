<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Many to Many Relationships</title>
</head>
<body>
    <h1>Many to Many Relationships</h1>
    <ul>
        @foreach ($users as $user)
        <li>
            <strong>{{ $user->name }}</strong>
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