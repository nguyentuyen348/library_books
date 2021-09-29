<?php

namespace App\Http\Controllers;

use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showFormRegister()
    {
        return view('pages.register');
    }

    public function register(Request $request, User $user,RoleUser $roleUser)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($request->password === $request->password_confirmation) {

            $user->save();
            $roleUser->user_id=$user->id;
            $roleUser->role_id=2;
            $roleUser->save();
            $email = $request->email;
            $password = $request->password;
            $data = [
                'email' => $email,
                'password' => $password
            ];
            if (Auth::attempt($data)){
                if (Gate::allows('admin')){
                    session()->flash('success','login successfully');
                    return view('pages.dashboard');
                }
                session()->flash('success','login successfully');
                return redirect()->route('index');
            }

            session()->flash('error','account not exist !');
            return redirect()->route('login');
        }
    }

}
