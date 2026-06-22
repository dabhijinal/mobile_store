<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category_add()
    {
        return view('admin.category_add');
    }
    public function category_save(Request $req)
    {
        $file = $req->icon;
        $img = time() . "." . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $img);

        Category::create([
            'name' => $req->name,
            'icon' => $img,
            'status' => $req->status
        ]);
        return redirect('admin/category_view');
    }

    public function category_view()
    {
        $catdata = category::all();
        return view('admin.category_view', compact('catdata'));
    }

    public function delete_category($id)
    {
        category::where('id', $id)->delete();
        return redirect('admin/category_view');
    }

    public function edit_category($id)
    {
        $catdata = category::find(($id));
        return view('admin.category_edit', compact('catdata'));
    }

    public function categoryedit_save(Request $req)
    {
        $cat = Category::find($req->id);

        // Image upload
        if ($req->hasFile('icon')) {
            $file = $req->icon;
            $img = time() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $img);
            $cat->icon = $img;
        }
        // Update data
        $cat->name = $req->name;
        $cat->status = $req->status;
        $cat->save();

        return redirect('admin/category_view');
    }


    public function index()
    {
        $products = Product::inRandomOrder()->take(8)->get();
        $categories = Category::withCount('products')->inRandomOrder()->take(4)->get();
        return view('index', compact('products', 'categories'));
    }
}
