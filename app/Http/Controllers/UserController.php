<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

class UserController extends Controller implements BaseInterface, UserInterface
{
    private $userModel;

    public function __construct(User $user)
    {
        $this->userModel = $user;
    }

    function index()
    {
        $roles=Role::all();
        $users = User::all();
        return view('backends.admin.users.list', compact('users','roles'));

    }

    function detail($id)
    {
        echo $id;
    }

    function getComment($idUser, $idComment = 1)
    {

    }

    function create()
    {
        return \view('backends.admin.users.add');
    }

    function getPostOfUser($idUser)
    {

    }

    function store(CreateUserRequest $request)
    {
        DB::beginTransaction();
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            $user->roles()->sync($request->role);
            DB::commit();
        }catch (\Exception $exception) {
            DB::rollBack();
        }
        return redirect()->route('users.index');

    }

    function update($id)
    {
        $roles=Role::all();
        $user = User::findOrFail($id);
        return \view('backends.admin.users.update', compact('user','roles'));
    }

    function edit(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $user = User::findOrFail($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
            $user->roles()->sync($request->role);
            DB::commit();
        }catch (\Exception $exception) {
            DB::rollBack();
        }

        return redirect()->route('users.index');
    }

    function delete($id)
    {
        $user = User::findOrFail($id);
        $user->roles()->detach();
        $user->delete();
        return redirect()->route('users.index');
    }
}
