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
            'benefit' => 'nullable|string',
            'materi' => 'nullable|string',
            'durasi' => 'nullable|string',
            'why' => 'nullable|string',
            'jadwal' => 'nullable|image',
            'persyaratan' => 'nullable|string',
            'method' => 'nullable|string',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('images', 'public') : null;
        $jadwalPath = $request->file('jadwal') ? $request->file('jadwal')->store('images', 'public') : null;

        Pelatihan::create([
            'title' => $request->title,
            'image' => $imagePath,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'benefit' => $request->benefit,
            'materi' => $request->materi,
            'durasi' => $request->durasi,
            'why' => $request->why,
            'jadwal' => $jadwalPath,
            'persyaratan' => $request->persyaratan,
            'method' => $request->method,
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
            'benefit' => 'nullable|string',
            'materi' => 'nullable|string',
            'durasi' => 'nullable|string',
            'why' => 'nullable|string',
            'jadwal' => 'nullable|image',
            'persyaratan' => 'nullable|string',
            'method' => 'nullable|string',
        ]);

        $updateData = [
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'benefit' => $request->benefit,
            'materi' => $request->materi,
            'durasi' => $request->durasi,
            'why' => $request->why,
            'persyaratan' => $request->persyaratan,
            'method' => $request->method,
        ];

        if ($request->hasFile('image')) {
            $updateData['image'] = $request->file('image')->store('images', 'public');
        }

        if ($request->hasFile('jadwal')) {
            $updateData['jadwal'] = $request->file('jadwal')->store('images', 'public');
        }

        $pelatihan->update($updateData);

        return redirect()->route('pelatihans.index')->with('success', 'Pelatihan updated successfully.');
    }

    public function destroy(Pelatihan $pelatihan)
    {
        $pelatihan->delete();
        return redirect()->route('pelatihans.index')->with('success', 'Pelatihan deleted successfully.');
    }

    public function showByCategory($category)
    {
        $category = Category::where('name', $category)->firstOrFail();
        $pelatihans = Pelatihan::where('category_id', $category->id)->get();

        return view('pelathian.show', compact('pelatihans', 'category'));
    }

    public function show($id)
    {
        $pelatihan = Pelatihan::findOrFail($id);
        return view('pelathian.detail', compact('pelatihan'));
    }

    public function showJadwal($categoryName)
    {
        $category = Category::where('name', $categoryName)->firstOrFail();

        // Get all pelatihans for this category
        $pelatihans = $category->pelatihans()->whereNotNull('jadwal')->get();

        // Return the view with the pelatihans filtered by the jadwal table
        return view('pelatihans.jadwal', compact('category', 'pelatihans'));
    }

}
