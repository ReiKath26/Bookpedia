<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\Categories;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function show()
    {
        $Books = book::all();
        $Categories = Categories::all();
        return view('allBooks', ['books'=>$Books, 'categories'=>$Categories]);
    }

    function showBookByCategory($name){
        $selectBook = book::select('books.*')
        ->join('categories', 'categories.id', '=', 'books.categories_id')->where('categories.name', $name)->get();
        $Categories = Categories::all();
        return view('allBooks', ['books'=>$selectBook, 'categories'=>$Categories]);
    }

    function showBookAvaible(){
        $selectBook = book::select('books.*')->where('books.stock', '>', 0)->get();
        $Categories = Categories::all();
        return view('allBooks', ['books'=>$selectBook, 'categories'=>$Categories]);
    }

    function showBookNewest(){
        $selectBook = book::orderByDesc('id')->get();
        $Categories = Categories::all();
        return view('allBooks', ['books'=>$selectBook, 'categories'=>$Categories]);
    }

    function showBookLowestPrice(){
        $selectBook = book::orderBy('price', 'asc')->get();
        $Categories = Categories::all();
        return view('allBooks', ['books'=>$selectBook, 'categories'=>$Categories]);
    }

    function showBookTopSelling(){
        $selectBook = book::orderBy('sold', 'desc')->get();
        $Categories = Categories::all();
        return view('allBooks', ['books'=>$selectBook, 'categories'=>$Categories]);
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
    
    //Return book detail and recomendation -> For Detail Page
    function detailAndRecomend($id)
    {
        $Books = book::orderBy('id', 'asc')->simplePaginate(5);

        if(book::where('id', $id)->exists())
        {
            $detailbook = book::select('books.*')
            ->join('publishers', 'publishers.id', '=', 'books.publisher_id')
            ->join('authors', 'authors.id', '=', 'books.author_id')->where('books.id', $id)->first();
        }
        return view('detail', ['bookdata'=>$detailbook, 'bookRec'=>$Books]);
    }
}
