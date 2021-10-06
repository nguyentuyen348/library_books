<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Detail_book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{

    public function index()
    {
        $detail_books=Detail_book::all();
        $categories=Category::all();
        $authors=Author::all();
        $books=Book::all();

        return view('backends.admin.books.list',compact('categories','authors','detail_books','books'));
    }


    public function create()
    {
        $authors=Author::all();
        $categories=Category::all();
        return view('backends.admin.books.create',compact('authors','categories'));
    }


    public function store(Request $request, Book $book,Detail_book $detail_book)
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
        $detail_book->id=$book->id;
        $detail_book->save();
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
