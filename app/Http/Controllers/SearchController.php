<?php

namespace App\Http\Controllers;

use App\Book;
use App\Requests;
use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        request()->validate([
            'search' => 'required'
        ]);

        if (auth()->user()->role == 'librarian') {
            $results = User::where('user_id', \request('search'))
                ->orWhere('email', \request('search'))->first();

            $pendingBooks = Requests::where('user_id', $results->id)
                ->where('status', 'pending')->get();
            $pendingReturn = Requests::where('user_id', $results->id)
                ->where('status', 'accepted')->get();
            $returned = Requests::where('user_id', $results->id)
                ->where('status', 'returned')->get();

            return view('admin.search', compact('pendingBooks', 'results', 'pendingReturn', 'returned'));
        } else {

           $book = request('search');

            $results = User::where('user_id', \request('search'))
                ->orWhere('email', \request('search'))->first();

            $pendingBooks = Requests::where('user_id', auth()->user()->id)
                                      ->where('status', 'pending')
                                      ->where('book_name', 'LIKE', '%'. $book .'%')->get();

            $pendingReturn = Requests::where('user_id', auth()->user()->id)
                                      ->where('status', 'accepted')
                                      ->where('book_name', 'LIKE', '%'. $book .'%')->get();


            $returned = Requests::where('user_id', auth()->user()->id)
                                  ->where('status', 'returned')
                                  ->where('book_name', 'LIKE', '%'. $book .'%')->get();

            return view('admin.search', compact('pendingBooks',  'pendingReturn', 'returned'));

        }

    }
}
