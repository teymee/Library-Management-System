<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LibController extends Controller
{
    public function allUsers()
    {
        $users = User::where('role', 'user')->get();
        return view('admin.librarian.users' , compact('users'));
    }

    public function allLibs()
    {
        $libs = User::where('role', 'librarian')->get();
        return view('admin.librarian.librarians' , compact('libs'));
    }

    public function changeStatus($id)
    {
        $user = user::where('id', $id)->first();
        $role = $user->role;
        if($role == 'librarian'){
            $user->role = 'user';
            $user->save();
        }elseif($role == 'user'){
            $user->role = 'librarian';
            $user->save();
        }

        return back();
    }
}
