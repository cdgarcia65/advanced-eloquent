<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>whereHas</title>
</head>
<body>
    <h1>whereHas</h1>
    <h2>Categories</h2>

    <ul>
    @foreach ($categories as $category)
        <li>{{ $category->name }} ({{ $category->num_books }})</li>
        <ul>
            @foreach ($category->books_public as $book)
            <li>
                <strong>{{ $book->title }}: </strong>{{ $book->description }} {{ $book->status }}
            </li>
            @endforeach
        </ul>
    @endforeach
    </ul>
</body>
</html>