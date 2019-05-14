<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Many To Many - Part 2</title>
</head>
<body>
    <h1>Many To Many Relationship</h1>

    <form action="{{ route('putEdit', $user->id) }}" method="post">
        {!! csrf_field() !!}
        {!! method_field('PUT') !!}
        <div>
            <p><strong>User (Author)</strong></p>
            {{ $user->name }}
        </div>
        <div>
            <label for="books">Books: </label> <br>
            <select name="books[]" id="books" multiple>
                @foreach ($books as $book => $id)
                <option value="{{ $id }}" selected="{{ $id }}">{{ $book }}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="Update">
    </form>
</body>
</html>