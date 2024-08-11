<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Pelatihan;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function main()
    {
        $categories = Category::all();
        $pelatihans = Pelatihan::with('category')->get(); // Eager load category

        return view('layout.main', compact('pelatihans', 'categories'));
    }
}
