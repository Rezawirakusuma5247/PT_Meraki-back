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
        $categories = Category::all();
        $pelatihans = Pelatihan::with('category')->get();

        return view('user.pelatihan', compact('pelatihans', 'categories'));
    }

    public function view_certificate(Request $request)
    {
        {
            // Get the search query
            $query = $request->input('query');

            // Search for approved data
            $results = Pelatihan::where('approved') // Adjust this field based on your model
                                ->where(function ($q) use ($query) {
                                    $q->where('name', 'like', "%{$query}%")
                                      ->orWhere('certificate_number', 'like', "%{$query}%")
                                      ->orWhereDate('training_date', $query);
                                })
                                ->get();

            // Return the search results to a view
            return view('user.certificate', compact('results'));
    }
    }
    public function view_informasi()
    {
        return view('user.info');
    }

    public function view_thanks()
    {
        return view('user.thanks');
    }

    public function view_jadwal()
    {
        $categories = Category::all();
        $pelatihans = Pelatihan::with('category')->get();

        return view('user.jadwal', compact('pelatihans', 'categories'));
    }

}
