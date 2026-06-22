<?php

namespace App\Http\Controllers;

use App\Models\address;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    //----Address-----

    public function checkout($id)
    {
        $product = Product::find($id);

        return view('checkout', compact('product'));
    }
    public function save_address(Request $request, $id)
    {
        address::create([
            'user_id' => Auth::user()->id,
            'fullname' => $request->fullname,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'pincode' => $request->pincode,
            'landmark' => $request->landmark,
        ]);

        return redirect('payment/' . $id);
    }

    public function order_view()
    {
        $orders = Order::with('user')->get();

        return view('admin.order_view', compact('orders'));
    }
}
