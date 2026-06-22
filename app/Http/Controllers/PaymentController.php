<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    // Payment Page
    public function payment($id)
    {
        // Check Login
        if (!Auth::check()) {

            return redirect('/login')
                ->with('error', 'Please Login First');
        }

        $proddata = Product::find($id);
        $orderdata = Order::find($id);

        if (!$proddata) {

            return redirect('/')
                ->with('error', 'Product Not Found');
        }

        return view(
            'payment',
            compact('proddata','orderdata')
        );
    }

    public function store(Request $request)
    {
        if (!Auth::check()) {

            return redirect('/login')
                ->with('error', 'Please Login First');
        }

        try {

            $api = new Api(
                config('services.razorpay.key'),
                config('services.razorpay.secret')
            );

            $payment = $api->payment
                ->fetch($request->razorpay_payment_id);

            if (
                $payment->status == 'captured'
                ||
                $payment->status == 'authorized'
            ) {

                $product = Product::find(
                    $request->product_id
                );

                if (!$product) {

                    return redirect('/')
                        ->with(
                            'error',
                            'Product Not Found'
                        );
                }

                $order = new Order();

                $order->user_id =
                    Auth::user()->id;

                $order->product_id =
                    $product->id;

                $order->product_name =
                    $product->name;

                $order->product_img =
                    $product->img;

                $order->price =
                    $product->price;

                $order->payment_id =
                    $request->razorpay_payment_id;

                $order->qty = 1;

                $order->status = "Paid";

                $order->save();

                return redirect('myorder')
                    ->with(
                        'success',
                        'Payment Successful'
                    );
            }

            return back()->with(
                'error',
                'Payment Failed'
            );
        } catch (\Exception $e) {

            return back()->with(
                'error',
                $e->getMessage()
            );
        }
    }
}
