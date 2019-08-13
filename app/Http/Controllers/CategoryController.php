<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Product;
use App\User;
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

        if($cart)
        {
            return redirect()->back()->with('message', 'added to cart successfully');
        }
    }

    public  function showcart()
    {
        $category = Category::all();
        $carts = Auth::user()->cart;
//        foreach ($carts as $cart)
//        {
//            dd($cart->product);
//        }
        return view('pages.cart', compact('category', 'carts'));
    }
//
    public function description($id)
    {
//        dd($id);
        $products = Product::find($id);
        $category = Category::all();
        $carts = Auth::user()->cart;
        return view('pages.description', compact('category', 'carts', 'products'));
    }
}
