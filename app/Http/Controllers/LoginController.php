<?php

namespace App\Http\Controllers;

use App\Http\Services\LoginService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class LoginController extends Controller
{
    protected $loginService;

    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    function showFormLogin()
    {
        return view('pages.login');
    }

    function login(Request $request)
    {

        if ($this->loginService->checkLogin($request)) {
            if (Gate::allows('admin')){
                return redirect()->route('admin.index');
            }
            return redirect()->route('index');
        }
        session()->flash('error','login error');
        return back();
    }

    public function logout(Request $request)
    {
        session()->flush();
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        session()->flash('logout','logged out');
        return redirect()->route('admin.index');
    }
}
