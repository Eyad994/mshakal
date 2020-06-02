<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $rightCategories = Category::where('id', '<', 4)->get();
        $leftCategories = Category::where('id', '>', 3)->where('id', '<=', 6)->get();

        return view('main', compact('rightCategories', 'leftCategories'));
    }
}
