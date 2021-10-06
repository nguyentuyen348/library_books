<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller implements BaseInterface
{
    function index() {
        $books=Book::all();
        return view('pages.dashboard',compact('books'));
    }

    public function search(Request $request)
    {
        $booksSearch=$request->search;
        $books=Book::where('name','LIKE',"%$booksSearch%");
        return redirect()->route('admin.index',compact('books'));
    }

    function create()
    {
        // TODO: Implement create() method.
    }

    function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
