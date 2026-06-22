<?php

namespace App\Http\Controllers;

use App\Models\address;
use App\Models\Category;
use App\Models\cart;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class productController extends Controller
{
    public function product_add()
    {
        $proddata = Category::all();

        return view('admin.product_add', compact('proddata'));
    }
    public function product_save(Request $req)
    {
        $file = $req->img;
        $img = time() . "." . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $img);

        Product::create([
            'category_id' => $req->category_id,
            'name' => $req->name,
            'description' => $req->description,
            'price' => $req->price,
            'qty' => $req->qty,
            'img' => $img,
            'status' => $req->status
        ]);

        return redirect('admin/product_view');
    }

    public function product_view()
    {
        $proddata = Product::with('category')->get();
        return view('admin.product_view', compact('proddata'));
    }

    public function delete_product($id)
    {
        Product::where('id', $id)->delete();
        return redirect('admin/product_view');
    }

    public function edit_product($id)
    {
        $proddata = Product::find($id);
        $catdata = Category::all();
        return view('admin.product_edit', compact('proddata', 'catdata'));
    }

    public function productedit_save(Request $req)
    {
        $prod = Product::find($req->id);

        // Image upload
        if ($req->hasFile('img')) {
            $file = $req->img;
            $img = time() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $img);
            $prod->img = $img;
        }

        // Update data
        $prod->category_id = $req->category_id;
        $prod->name = $req->name;
        $prod->description = $req->description;
        $prod->price = $req->price;
        $prod->qty = $req->qty;
        $prod->status = $req->status;

        $prod->save();

        return redirect('admin/product_view');
    }

    public function shop(Request $request)
    {
        $search = $request->search;

        $proddata = Product::where('status', 'Active')
            ->when($search, function ($query) use ($search) {

                $query->where('name', 'LIKE', "%$search%");
            })
            ->get();

        return view('shop', compact('proddata'));
    }
    public function shop_detail($id)
    {
        $proddata = Product::find($id);

        $related = Product::where('category_id', $proddata->category_id)
            ->where('id', '!=', $id)
            ->get();

        $reviews = Review::where('product_id', $id)
            ->latest()
            ->get();

        return view('shop_detail', compact(
            'proddata',
            'related',
            'reviews'
        ));
    }
    public function store_review(Request $request)
    {
        Review::create([

            'product_id' => $request->product_id,

            'name' => $request->name,

            'review' => $request->review

        ]);

        return back()->with('success', 'Review Added Successfully');
    }

   
}
