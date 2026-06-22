<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.dashboard');
    }

    public function user_view()
    {
        $data = User::where('user_type', 2)->get();

        return view('admin.user_view', compact('data'));
    }

    public function review_view()
    {
        $reviews = Review::with('product')->get();

        return view('admin.review_view', compact('reviews'));
    }

    public function dashboard()
    {
        $totalUsers = User::where('user_type', '2')->count();
        $totalAdmins = User::where('user_type', '1')->count();
        $totalProducts = Product::count();
        $totalCategories = Category::count();
        $totalReviews = Review::count();

        $recentUsers = User::latest()->take(5)->get();
        $recentReviews = Review::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalUsers',
            'totalAdmins',
            'totalProducts',
            'totalCategories',
            'totalReviews',
            'recentUsers',
            'recentReviews'
        ));
    }
}
