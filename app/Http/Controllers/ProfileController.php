<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{

    public function index()
    {
        return view('admin.profile');
    }

    public function update(User $user)
    {
        $currentPhone = $user->phone;

        $phone = (request('phone') == $currentPhone )? 'nullable' : 'required|unique:users';

        $details = request()->validate([
                        'lastname'     => 'required',
                         'firstname'   => 'required',
                         'address'     => 'required',
                         'phone'       => $phone
        ]);

        $user->update($details);
        $user->save();
        return redirect('/profile');
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function updateSettingPic(User $user)
    {

//        $firstImage = request('firstImage');
        if(request()->hasFile('pro_pic'))
        {
            $fileNameToStore = request('pro_pic')->store('user', 'public');
            $user->avatar = $fileNameToStore;
            $user->save();
            return back()->with('session_message', \request('name') . ' updated successfully');
        }
    }

    public function updatePassword(User $user)
    {


        request()->validate([
            'password' => ['required','string', 'min:8', 'confirmed'],
        ]);


        $user->password = Hash::make(request('password'));
        $user->save();

        return back()->with('session message', 'Profile (and password) updated successfully');
    }
}
