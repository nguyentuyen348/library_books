<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PageController extends Controller
{
    public function index()
    {
        $books=Book::all();
        return view('frontends.pages.home',compact('books'));
    }
}
