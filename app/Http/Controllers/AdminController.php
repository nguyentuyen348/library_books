<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller implements BaseInterface
{
    function index() {

        return view('pages.dashboard');
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
