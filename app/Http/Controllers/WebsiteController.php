<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\Requests;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        if(auth()->user())
        {
            if (auth()->user()->role == 'user')
            {
                $num = Requests::where('user_id', auth()->user()->id)
                    ->where('status', 'off')->count();
                $genre = Category::inRandomOrder()->take(4)->get();
                return view('website.welcome', compact('num','genre'));

            } elseif (auth()->user()->role == 'librarian')
            {
                $num = Requests::where('status', 'pending')->get()->count();
                $genre = Category::inRandomOrder()->take(4)->get();
                return view('website.welcome', compact('num','genre'));
            }
        }
        $genre = Category::inRandomOrder()->take(4)->get();
        return view('website.welcome', compact('genre'));

    }

    public function catalog()
    {
        if(auth()->user())
        {
            if (auth()->user()->role == 'user')
            {
                $num = Requests::where('user_id', auth()->user()->id)
                    ->where('status', 'off')->count();
                $all = Book::inRandomOrder()->take(6)->get();
                $new = Book::orderBy('created_at', 'desc')->take(6)->get();
                $popular = Book::orderBy('quantity', 'desc')->take(6)->get();
                $genre = Category::inRandomOrder()->take(4)->get();
                return view('website.catalog', compact('all', 'new', 'popular','num','genre'));

            } elseif (auth()->user()->role == 'librarian')
            {
                $num = Requests::where('status', 'pending')->get()->count();
                $all = Book::inRandomOrder()->take(6)->get();
                $new = Book::orderBy('created_at', 'desc')->take(6)->get();
                $popular = Book::orderBy('quantity', 'desc')->take(6)->get();
                $genre = Category::inRandomOrder()->take(4)->get();
                return view('website.catalog', compact('all', 'new', 'popular','num','genre'));
            }
        }

        $all = Book::inRandomOrder()->take(6)->get();
        $new = Book::orderBy('created_at', 'desc')->take(6)->get();
        $popular = Book::orderBy('quantity', 'desc')->take(6)->get();
        $genre = Category::inRandomOrder()->take(4)->get();
        return view('website.catalog', compact('all', 'new', 'popular','genre'));


    }

    public function library()
    {



        if(auth()->user())
        {
            if (auth()->user()->role == 'user')
            {

                $num = Requests::where('user_id', auth()->user()->id)
                    ->where('status', 'off')->count();
                if(request('genre')){
                    $books = Book::where('cat_id', request('genre'))->get();
                }else{
                    $books = Book::inRandomOrder()->take(9)->get();
                }
                $genre = Category::inRandomOrder()->take(4)->get();
                $categories = Category::orderBy('name', 'asc')->get();
                return view('website.library', compact('num', 'categories','books','genre'));

            } elseif (auth()->user()->role == 'librarian')
            {
                $num = Requests::where('status', 'pending')->get()->count();
                if(request('genre')){
                    $books = Book::where('cat_id', request('genre'))->get();
                }else{
                    $books = Book::inRandomOrder()->take(9)->get();
                }
                $categories = Category::orderBy('name', 'asc')->get();
                $genre = Category::inRandomOrder()->take(4)->get();
                return view('website.library', compact('num', 'categories','books','genre'));
            }


        }

        if(request('genre')){
            $books = Book::where('cat_id', request('genre'))->get();
        }else{
            $books = Book::inRandomOrder()->take(9)->get();
        }
        $genre = Category::inRandomOrder()->take(4)->get();
        $categories = Category::orderBy('name', 'asc')->get();

        return view('website.library', compact('categories','books','genre'));

//        $num = Requests::where('user_id', auth()->user()->id)
//            ->where('status', 'off')->count();
//        $categories = Category::orderBy('name', 'asc')->get();

    }

    public function contact()
    {
        if(auth()->user())
        {
            if (auth()->user()->role == 'user')
            {
                $num = Requests::where('user_id', auth()->user()->id)
                    ->where('status', 'off')->count();
                $genre = Category::inRandomOrder()->take(4)->get();
                return view('website.contact', compact('num','genre'));

            } elseif (auth()->user()->role == 'librarian')
            {
                $num = Requests::where('status', 'pending')->get()->count();
                     $genre = Category::inRandomOrder()->take(4)->get();
                return view('website.contact', compact('num','genre'));
            }
        }
        $genre = Category::inRandomOrder()->take(4)->get();
        return view('website.contact', compact('genre'));

    }

    public function bookDetail($name)
    {
        if(auth()->user())
        {
            if (auth()->user()->role == 'user')
            {
                $num = Requests::where('user_id', auth()->user()->id)
                    ->where('status', 'off')->count();
                $book = Book::where('name', $name)->first();
                $genre = Category::inRandomOrder()->take(4)->get();
                return view('website.book_detail', compact('num','book','genre'));

            } elseif (auth()->user()->role == 'librarian')
            {
                $num = Requests::where('status', 'pending')->get()->count();
                $book = Book::where('name', $name)->first();
                $genre = Category::inRandomOrder()->take(4)->get();
                return view('website.book_detail', compact('num','book','genre'));
            }
        }
        $book = Book::where('name', $name)->first();
        $genre = Category::inRandomOrder()->take(4)->get();
        return view('website.book_detail', compact('book','genre'));

    }

    public function search(){
        request()->validate([
            'search' => 'required'
        ]);
        if(auth()->user())
        {
            if (auth()->user()->role == 'user')
            {

                $num = Requests::where('user_id', auth()->user()->id)
                    ->where('status', 'off')->count();
                $genre = Category::inRandomOrder()->take(4)->get();
                return view('website.web_search', compact('num', 'categories','books','genre'));

            } elseif (auth()->user()->role == 'librarian')
            {
                $num = Requests::where('status', 'pending')->get()->count();
                $genre = Category::inRandomOrder()->take(4)->get();
                return view('website.web_search', compact('num', 'categories','books','genre'));
            }


        }


        $books = Book::where('name', 'LIKE', '%' . \request('search'). '%')->get();
        $genre = Category::inRandomOrder()->take(4)->get();
        return view('website.web_search', compact( 'books','genre'));
    }
}
