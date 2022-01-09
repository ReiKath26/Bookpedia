<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function show()
    {
        $Books = book::all();
        return view('allBooks', ['books'=>$Books]);
    }

    function bookShow()
    {
        $Books = book::orderBy('id', 'asc')->simplePaginate(5);
        return view('home', ['books'=>$Books]);
    }

    function detail($id)
    {
        if(book::where('id', $id)->exists())
        {
            $book = book::select('books.*')
            ->join('publishers', 'publishers.id', '=', 'books.publisher_id')
            ->join('authors', 'authors.id', '=', 'books.author_id')->where('books.id', $id)->first();
            return view('detail', ['book'=>$book]);
        }
    }
}
