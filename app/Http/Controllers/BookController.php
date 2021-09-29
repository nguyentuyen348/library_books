<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        $categories=Category::all();
        $authors=Author::all();
        $books=Book::all();
        return view('backends.admin.books.list',compact('books','categories','authors'));
    }


    public function create()
    {
        $authors=Author::all();
        $categories=Category::all();
        return view('backends.admin.books.create',compact('authors','categories'));
    }


    public function store(Request $request, Book $book)
    {

        if ($request->hasFile('image')){
            $image=$request->file('image');
            $path=$image->store('images','public');
            $book->image=$path;
        }
        $book->name=$request->name;
        $book->price=$request->price;
        $book->author_id=$request->author_id;
        $book->category_id=$request->category_id;
        $book->save();

        return redirect()->route('books.index');
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $book=Book::findOrFail($id);
        $categories=Category::all();
        $authors=Author::all();
        return view('backends.admin.books.update',compact('book','authors','categories'));
    }


    public function update(Request $request, $id)
    {
        $book=Book::findOrFail($id);

        if ($request->hasFile('image')){
            $image=$request->file('image');
            $path=$image->store('images','public');
            $book->image=$path;
        }
        $book->name=$request->name;
        $book->price=$request->price;
        $book->author_id=$request->author_id;
        $book->category_id=$request->category_id;
        $book->save();

        return redirect()->route('books.index');

    }


    public function destroy($id)
    {
        $book=Book::findOrFail($id);
        $book->destroy();
        return redirect()->route('books.index');
    }
}
