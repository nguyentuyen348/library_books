<?php


namespace App\Http\Services;


use Illuminate\Support\Facades\Auth;

class LoginService
{
    function checkLogin($request)
    {
        $email = $request->email;
        $password = $request->password;
        $data = [
            'email' => $email,
            'password' => $password
        ];
        return Auth::attempt($data);
    }
        /*if (Auth::attempt($data)){
            session()->flash('login success','login successfully');
            return redirect()->route('pages.home');
        }
        return back();
    }*/
}
