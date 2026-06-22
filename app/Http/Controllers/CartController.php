<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //-----cart--------
    public function add_to_cart(Request $req,$id)
    {
        // Check Login
        if (!Auth::check()) {
            return redirect('/login')
                ->with('error', 'Please Login First');
        }

        // Logged In User
        $user = Auth::user();

        // Insert Cart Data
        $cart = new Cart();

        $cart->user_id = $user->id;
        $cart->product_id = $id;
        $cart->qty = $req->qty;

        $cart->save();

        return back()->with('success', 'Product Added To Cart');
    }

    public function cart()
    {
        $user = Auth::user();

        $cartdata = Cart::join('product', 'product.id', '=', 'cart.product_id')
            ->where('cart.user_id', $user->id)
            ->select(
                'cart.*',
                'product.name',
                'product.price',
                'product.img'
            )
            ->get();

        $total = 0;

        foreach ($cartdata as $c) {
            $total += $c->price * $c->qty;
        }

        return view(
            'cart',
            compact('cartdata', 'total')
        );
    }
    public function delete_cart($id)
    {
        $cartdata = Cart::find($id);

        $cartdata->delete();

        return redirect()->back();
    }
}
