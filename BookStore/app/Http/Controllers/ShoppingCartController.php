<?php

namespace App\Http\Controllers;

use App\book;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    //
    public function getIndex()
    {
        $books = book::all();
        return view('shoppingCart.index',['books' => $books]);
    }

    public function addToCart($id)
    {
        $book = book::find($id);

        if(!$book) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $id => [
                    "book_id" => $book->id,
                    "name" => $book->name,
                    "quantity" => 1,
                    "price" => $book->price,
                    "image" => $book->image
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

//         if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "book_id" => $book->id,
            "name" => $book->name,
            "quantity" => 1,
            "price" => $book->price,
            "image" => $book->image
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function removeFromCart($id)
    {
        $book = book::find($id);

        if(!$book) {
            abort(404);
        }

        $cart = session()->get('cart');

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']--;

            if($cart[$id]['quantity'] == 0)
            {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product removed from cart successfully!');

        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }

    public function emptyCart(Request $request)
    {
        $request->session()->forget('cart');
        return redirect()->back()->with('success', 'Empty cart successfully!');
    }
}
