<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories=Category::all();
        return view('backends.admin.categories.list',compact('categories'));
    }


    public function create()
    {
        return view('backends.admin.categories.create');
    }


    public function store(Request $request,Category $category)
    {
        $category->name=$request->name;
        $category->save();
        session()->flash('success','created successfully');
        return redirect()->route('categories.index');
    }


    public function show($id)
    {
        $category=Category::findOrFail($id);
        return view('backends.admin.categories.detail',compact('category'));
    }


    public function edit($id)
    {
        $category=Category::findOrFail($id);
        return view('backends.admin.categories.update',compact('category'));
    }


    public function update(Request $request, $id)
    {
        $category=Category::findOrFail($id);
        $category->name=$request->name;
        $category->save();
        session()->flash('success','updated successfully');
        return redirect()->route('categories.index');
    }


    public function destroy($id)
    {
        $category=Category::findOrFail($id);
        $category->delete();
        session()->flash('success','deleted successfully');
        return redirect()->route('categories.index');
    }
}
