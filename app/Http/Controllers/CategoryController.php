<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Product;
use App\User;
use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function addtocart($id)
    {
        $product = Product::find($id);
//        dd($product);
        $cart = Cart::create([
            'user_id' => Auth::id(),
            'product_id' => $product->id,
            'quantity' => 1,
            'status' => 1,
        ]);

        if ($cart) {
            return redirect()->back()->with('message', 'added to cart successfully');
        }
    }


    public function addtowishlist($id)
    {
        $wishlist = Wishlist::create([
            'user_id' => Auth::id(),
            'product_id' => $id,
            'category_id' => Product::find($id)->category->id
        ]);

        if ($wishlist) {
            return redirect()->back()->with('message', 'added to your wishlist successfully');
        }
    }

    public function showcart()
    {
        $wishlists = Auth::user()->wishlist;
        $category = Category::all();
        $carts = Auth::user()->cart;
//        foreach ($carts as $cart)
//        {
//            dd($cart->product);
//        }
        return view('pages.cart', compact('category', 'carts', 'wishlists'));
    }

//
    public function description($id)
    {
//        dd($id);
        $wishlists = Auth::user()->wishlist;
        $products = Product::find($id);
        $category = Category::all();
        $carts = Auth::user()->cart;
        return view('pages.description', compact('category', 'carts', 'products', 'wishlists'));
    }

    public function wishlist()
    {
        $wishlists = Auth::user()->wishlist;
        $category = Category::all();
        $carts = Auth::user()->cart;
//        foreach ($wishlists as $wishlist)
//        {
//            dd($wishlist->user);
//        }
        return view('pages.wishlist', compact('category', 'carts', 'wishlists'));
    }
}
