<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Pelatihan;
use App\Models\Slide;
class ViewController extends Controller
{
    public function dashboard_admin() {
        return view('admin.dashboard');
    }

    public function index()
    {
        $categories = Category::all();
        $pelatihans = Pelatihan::with('category')->get(); // Eager load category
        $slides = Slide::all(); // Fetch all slides from the database

        return view('welcome', compact('pelatihans', 'categories', 'slides'));
    }

    public function view_contact()
    {
        return view('user.contact');
    }

    public function view_pelatihan()
    {
        return view('user.pelatihan');
    }

    public function view_certificate()
    {
        return view('user.certificate'); 
    }

    public function view_informasi()
    {
        return view('user.info');
    }

    public function view_thanks()
    {
        return view('user.thanks');
    }

}
