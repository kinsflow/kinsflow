<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $carts = Auth::user()->cart;
        return view('blog.showBlog', compact('category', 'carts'));
    }
}
