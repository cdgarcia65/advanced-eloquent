<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>has</title>
</head>
<body>
    <h1>has</h1>
    <h2>Categories</h2>

    <ul>
    @foreach ($categories as $category)
        <li>{{ $category->name }} ({{ $category->num_books }})</li>
        <ul>
            @foreach ($category->books as $book)
            <li>
                <strong>{{ $book->title }}: </strong>
                {{ $book->description }}
            </li>
            @endforeach
        </ul>
    @endforeach
    </ul>
</body>
</html>