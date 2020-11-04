<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index()
    {
        return view('admin.profile');
    }

    public function settings()
    {
        return view('admin.settings');
    }
}
