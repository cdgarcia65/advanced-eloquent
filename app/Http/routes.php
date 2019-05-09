<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('books', function () {
    return App\Book::all();
});

// Buscar un registro que está en papelera
Route::get('registro-en-papelera/{id}', function ($id) {
    $book = App\Book::withTrashed()->find($id);

    return $book;
});

// Enviar un registro a papelera
Route::get('enviar-a-papelera/{id}', function ($id) {
    $book = App\Book::find($id);
    $book->delete();

    return 'Enviado a papelera';
});

// Restaurar un registro que está en papelera
Route::get('restaurar-registro/{id}', function ($id) {
    $book = App\Book::withTrashed()->find($id);
    $book->restore();

    return 'Registro restaurado';
});

// Eliminar un registro de forma permanente
Route::get('eliminar-registro/{id}', function ($id) {
    $book = App\Book::withTrashed()->find($id);
    $book->forceDelete();

    return 'Eliminado de forma permanente';
});

Route::get('delete-multiple-records', function () {
    $books = App\Book::get();
    return view('delete', compact('books'));
});

Route::delete('destroy', function (\Illuminate\Http\Request $request) {
    $ids = $request->get('ids');

    if (count($ids)) {
        App\Book::destroy($ids);
    }

    return back();
});
