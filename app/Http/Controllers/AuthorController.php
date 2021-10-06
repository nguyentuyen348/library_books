<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    public function index()
    {
        $authors=Author::all();
        return view('backends.admin.authors.list',compact('authors'));
    }


    public function create()
    {
        return view('backends.admin.authors.create');
    }


    public function store(Request $request,Author $author)
    {
        $author->name=$request->name;
        $author->save();
        return redirect()->route('authors.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $author=Author::findOrFail($id);
        return view('backends.admin.authors.update',compact('author'));
    }


    public function update(Request $request, $id)
    {
        $author=Author::findOrFail($id);
        $author->name=$request->name;
        $author->save();
        return redirect()->route('authors.index');

    }


    public function delete($id)
    {
        $author=Author::findOrFail($id);
        $author->delete();
        return redirect()->route('authors.index');
    }
}
