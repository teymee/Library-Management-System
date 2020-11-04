<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.librarian.add_category', compact('categories'));
    }

    public function store()
    {

        $category = request()->validate([
            'name' => 'required'
        ]);



        Category::create($category);

        return back();
    }
}
