<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Book;

class UserController extends Controller
{
    public function getEditManyToMany($id)
    {
        $user = User::find($id);
        $books = Book::where('user_id', $id)->orderBy('title', 'asc')->lists('id', 'title');
        dd($books);
        return view('many-to-many-2.edit', compact('user', 'books'));
    }
}
