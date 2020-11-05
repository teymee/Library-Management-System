<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{

    public function index()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('admin.librarian.add_book', compact('categories'));
    }

    public function store(Book $book)
    {
        request()->validate([
            'name'          => 'required',
            'author'        => 'required',
            'cat_id'        => 'required|exists:categories,id',
            'synopsis'       => 'required',
            'pub_date'      => 'required',
            'lease_week'    => 'required',
            'pages'         => 'required',
            'images'        => 'nullable',
            'price'         => 'required',
            'quantity'      =>' required'
        ]);

//                REGULAR HOSTING

        if(request()->hasFile('images')){
            $fileNameToStore = request('images')->store('book_images', 'public');
        }else{
            $fileNameToStore = 'book_images\noimages.png';
        }

       $book = new Book(request(['name', 'author','cat_id','quantity','price','images','synopsis','pub_date','lease_week','pages']));
        $book->images = $fileNameToStore;
        $book->save();
       return back();


    }

    public function show()
    {
        $books = Book::orderBy('name', 'asc')->paginate(10);

        return view ('admin.librarian.display_books', compact('books'));
    }

    public function edit(Book $book)
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('admin.librarian.edit_book', compact('book','categories'));
    }

    public function update(Book $book)
    {
        $details = request()->validate([
            'name'          => 'required',
            'author'        => 'required',
            'cat_id'        => 'required|exists:categories,id',
            'synopsis'       => 'required',
            'pub_date'      => 'required',
            'lease_week'    => 'required',
            'pages'         => 'required',
            'images'        => 'nullable',
            'price'         => 'required',
            'quantity'      =>' required'
        ]);

        $firstImage = request('firstImage');
        if(request()->hasFile('images'))
        {
            Storage::delete('public/'.$firstImage );
            $fileNameToStore = request('images')->store('book_images', 'public');

        }else{
            $fileNameToStore = $firstImage;
        }

        $book->update($details);
        $book->images = $fileNameToStore;
        $book->save();
        return redirect('/books')->with('session_message', \request('name') . ' updated successfully');
    }
}
