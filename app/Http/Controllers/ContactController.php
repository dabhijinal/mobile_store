<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function contact_save(Request  $req)
    {
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'subject' => $req->subject,
            'message' => $req->message,
        ];

        contact::create($data);

        Mail::to('jinaldabhi1811@gmail.com')->send(new ContactMail($data));

        return redirect('contact');
    }

    public function profile()
    {
        // Check User Login
        if (!Auth::check()) {
            return redirect('/login')
                ->with('error', 'Please Login First');
        }

        // Logged In User Data
        $user = Auth::user();

        return view('profile', compact('user'));
    }
    public function update_profile(Request $request)
    {
        // Login User
        $user = Auth::user();

        // Update Data
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->phone;

        // Save
        $user->save();

        // Redirect Back
        return back()->with('success', 'Profile Updated Successfully');
    }
    //---------------- MY ORDERS ----------------//

    public function my_orders()
    {
        // Login Check
        if (!Auth::check()) {
            return redirect('/login')
                ->with('error', 'Please Login First');
        }

        $orders = Order::join(
            'product',
            'product.id',
            '=',
            'orders.product_id'
        )
            ->where('orders.user_id', Auth::user()->id)
            ->select(
                'orders.*',
                'product.name as product_name',
                'product.img as product_img'
            )
            ->get();

        return view('myorder', compact('orders'));
    }
}
