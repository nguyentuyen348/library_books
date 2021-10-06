<?php

namespace App\Http\Controllers;

use App\Models\Book;

use App\Models\Detail_book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function index()
    {
        $detail_books=Detail_book::all();
        $books=Book::all();
        return view('frontends.pages.home',compact('books','detail_books'));
    }

    public function detailBook($id)
    {

        $book=Book::findOrFail($id);
        $detail_book=Detail_book::findOrFail($id);

        $book_id = 'book_' . $book->id;
        if (!Session::has($book_id)) {
            Book::where('id', $id)->increment('view');
            Session::put($book_id, 1);
        }

        return view('frontends.books.detail',compact('detail_book','book'));
    }

    public function search(Request $request)
    {
        $valueSearch=$request->search;
        $books = Book::where('name', 'LIKE', "%$valueSearch%")/*->orWhere('company', 'LIKE', "%$jobSearch%")*/->get();
        return view('frontends.pages.home',compact('books'));
    }
}
