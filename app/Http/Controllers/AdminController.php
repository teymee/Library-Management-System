<?php

namespace App\Http\Controllers;

use App\Book;
use App\Requests;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(){

        if(auth()->user()->role == 'librarian')
        {
            $users = User::where('role', 'user')->get()->count();
            $books = Book::all()->count();
            $pending_request = Requests::where('status', 'pending')->get()->count();
            $pending_sub = Requests::where('status', 'accepted')->get()->count();

            return view ('admin.librarian.Lib_index', compact('users','books','pending_request','pending_sub'));
        }else{

            $books = Requests::where('user_id', auth()->user()->id)
                            ->where('status', 'off')->count();
            $pending_request = Requests::where('user_id', auth()->user()->id)
                                         ->where('status', 'pending')->get()->count();
            $accepted_request = Requests::where('user_id', auth()->user()->id)
                                    ->where('status', 'accepted')->get()->count();
            $returned_books = Requests::where('user_id', auth()->user()->id)
                                         ->where('status', 'returned')->get()->count();

            return view ('admin.user.user_index', compact('accepted_request','books','pending_request','returned_books'));
        }


    }
}
