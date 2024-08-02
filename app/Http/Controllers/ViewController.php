<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Pelatihan;
class ViewController extends Controller
{
    public function dashboard_admin() {
        return view('admin.dashboard');
    }

    public function index()
    {
        $categories = Category::all();
        $pelatihans = Pelatihan::with('category')->get(); // Eager load category
        return view('welcome', compact('pelatihans', 'categories'));
    }

}
