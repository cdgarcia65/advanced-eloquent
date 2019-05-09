<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete multiple records</title>
</head>
<body>
    <h1>Delete multiple records</h1>
    <p>Número de registros: {{ count($books) }}</p>
    <form action="{{ url('destroy') }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        @foreach ($books as $book) 
        <input type="checkbox" name="ids[]" value="{{ $book->id }}"> {{ $book->title }} <br>
        @endforeach
        <input type="submit" value="Enviar">
    </form>
</body>
</html>