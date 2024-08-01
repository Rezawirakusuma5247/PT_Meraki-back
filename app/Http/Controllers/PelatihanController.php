<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use Illuminate\Http\Request;
use App\Models\Category;
class PelatihanController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $pelatihans = Pelatihan::with('category')->get(); // Eager load category
        return view('pelathian.index', compact('pelatihans', 'categories'));
    }
    
    public function create()
    {
        $categories = Category::all(); // Fetch all categories
        return view('pelathian.create', compact('categories'));
    }
    
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'nullable|image',
        'description' => 'required|string',
        'category_id' => 'required|exists:categories,id',
    ]);
    
    $imagePath = $request->file('image') ? $request->file('image')->store('images', 'public') : null;

    Pelatihan::create([
        'title' => $request->title,
        'image' => $imagePath,
        'description' => $request->description,
        'category_id' => $request->category_id,
    ]);

    return redirect()->route('pelatihans.index')->with('success', 'Pelatihan created successfully.');
}

    public function edit(Pelatihan $pelatihan)
    {
        $categories = Category::all(); // Fetch all categories
        return view('pelathian.edit', compact('pelatihan', 'categories'));
    }
    
    public function update(Request $request, Pelatihan $pelatihan)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'nullable|image',
        'description' => 'required|string',
        'category_id' => 'required|exists:categories,id',
    ]);
    
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');
        $pelatihan->update([
            'title' => $request->title,
            'image' => $imagePath,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);
    } else {
        $pelatihan->update([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);
    }

    return redirect()->route('pelatihans.index')->with('success', 'Pelatihan updated successfully.');
}
    public function destroy(Pelatihan $pelatihan)
    {
        $pelatihan->delete();
        return redirect()->route('pelatihans.index')->with('success', 'Pelatihan deleted successfully.');
    }
}

