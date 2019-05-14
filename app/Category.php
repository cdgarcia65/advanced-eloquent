<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function getNumBooksAttribute()
    {
        return $this->books->where('status', 'public')->count();
    }

    public function getBooksPublicAttribute()
    {
        return $this->books->where('status', 'public');
    }
}
