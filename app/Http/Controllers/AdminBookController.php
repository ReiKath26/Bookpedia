<?php

namespace App\Http\Controllers;

use App\Models\author;
use App\Models\book;
use App\Models\Categories;
use App\Models\publisher;
use Illuminate\Http\Request;

class AdminBookController extends Controller
{
    public function index()
    {
        $Books = book::all();
        return view('dashboard.book', ['books'=>$Books]);
    }

    public function newBook()
    {
        $Category = Categories::all();
        $Author = author::all();
        $publisher = publisher::all();
        return view('dashboard.new', ['category'=>$Category, 'author'=>$Author, 'publisher'=>$publisher]);
    }

    public function bookUpdate($id)
    {

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'ISBN' => 'required|unique:books',
            'title' => 'required|unique:books',
            'category' => 'required',
            'publisher' => 'required',
            'author' => 'required',
            'description' => 'requrired',
            'price' =>'required',
            'year' => 'required',
            'language' => 'required',
            'page' => 'required',
            'img' => 'required',
            'stock' => 'required'
        ]);

        $input = $request->all();
        $newBook = book::create($input);
        return back()->with('success', 'Book added');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'ISBN' => 'required',
            'title' => 'required',
            'category' => 'required',
            'publisher' => 'required',
            'author' => 'required',
            'description' => 'requrired',
            'price' =>'required',
            'year' => 'required',
            'language' => 'required',
            'page' => 'required',
            'img' => 'required',
            'stock' => 'required'
        ]);

        $input = book::findOrFail($id)->update([
            'ISBN' => $request->ISBN,
            'title' => $request->title,
            'category' => $request->category,
            'publisher' => $request->publisher,
            'author' => $request->author,
            'description' => $request->description,
            'price' =>$request->price,
            'year' => $request->year,
            'language' => $request->language,
            'page' => $request->page,
            'img' => $request->img,
            'stock' => $request->stock
        ]);

        return redirect()->intended('/dashboard-book')->with('success', 'Book updated');
    }

    public function destroy($id)
    {
        $thisDetail = book::findOrFail($id);
        if($thisDetail->delete())
        {
            return back()->with('success', 'Item deleted');
        }

        else
        {
            return back()->with('error', 'Item not deleted');
        }
    }
}
