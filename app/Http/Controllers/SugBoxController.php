<?php

namespace App\Http\Controllers;

use App\Sug_box;
use Illuminate\Http\Request;

class SugBoxController extends Controller
{

    public function index()
    {
        $sug = Sug_box::orderBy('created_at' , 'desc')->get();
        return view('admin.librarian.sug_box', compact('sug'));
    }

    public function store()
    {

        $sug= request()->validate([
            'name' => 'required'
        ]);

        Sug_box::create($sug);

        return back()->with('session_text', 'Thank You for your Suggestion');
    }

    public function destroy(Sug_box $sug_box)
    {
        $sug_box->delete();
        return back();
    }
}
