<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index ()
    {
        return view('welcome')->with(['products' => Product::all(), 'categories' => Category::all()]);
    }
}
