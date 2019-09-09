<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $wishlists = Auth::user()->wishlist;
        $postnumber = Request('postnumber');
        $posts = Post::orderBy('id', 'desc')->get()->take($postnumber);
//        dd($posts);
        $category = Category::all();
        $carts = Auth::user()->cart;
        return view('blog.showBlog', compact('category', 'carts', 'posts', 'wishlists'));
    }

    public function editBlog($id)
    {

        $postnumber = Request('postnumber');
        $posts = Post::find($id);
        $wishlists = Auth::user()->wishlist;
        $comments = $posts->comments;
//        dd($comments);
        $category = Category::all();
        $carts = Auth::user()->cart;
        return view('blog.editBlog', compact('category', 'carts', 'posts', 'comments', 'wishlists'));
    }


    public function categoryBlog($id)
    {
//        dd($id);
        $wishlists = Auth::user()->wishlist;
        $postnumber = Request('postnumber');
        $posts = Post::orderBy('id', 'desc')->where('category_id', $id)->get()->take($postnumber);
        $category = Category::all();
        $carts = Auth::user()->cart;
        return view('blog.categoryBlog', compact('category', 'carts', 'posts', 'wishlists'));
    }

    public  function  comments($id)
    {
        $input = Comment::create([
            'user_id' => Auth::id(),
            'body' => Request('comment'),
            'post_id' => $id
            ]);

        if($input)
        {
            return redirect()->back();
        }
//        dd($input);
    }

    public function  create()
    {
//        $posts = Post::orderBy('id', 'desc')->where('category_id', $id)->get()->take($postnumber);
        $wishlists = Auth::user()->wishlist;
        $category = Category::all();
        $carts = Auth::user()->cart;
        return view('blog.createBlog', compact('category', 'carts', 'wishlists'));
    }

    public function createBlog()
    {
//        dd(Request('optradio'));
        $input = Post::create([
            'user_id' => Auth::id(),
            'category_id' => Request('optradio'),
            'title' => Request('title'),
            'body' => Request('body'),
        ]);
        if($input)
        {
            return redirect()->route('allblog');
        }else{
            return redirect()->back();
        }
    }
}
