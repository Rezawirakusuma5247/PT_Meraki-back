<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    public function index()
    {
        $pelatihans = Pelatihan::all();
        return view('pelathian.index', compact('pelatihans'));
    }
    public function create()
    {
        return view('pelathian.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image',
            'description' => 'required',
        ]);
        $imagePath = $request->file('image')->store('images', 'public');

        Pelatihan::create([
            'title' => $request->title,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('pelatihans.index')->with('success', 'Pelatihan created successfully.');
    }
    public function edit(Pelatihan $pelatihan)
    {
        return view('pelathian.edit', compact('pelatihan'));
    }
    public function update(Request $request, Pelatihan $pelatihan)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image',
            'description' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $pelatihan->update([
                'title' => $request->title,
                'image' => $imagePath,
                'description' => $request->description,
            ]);
        } else {
            $pelatihan->update($request->only('title', 'description'));
        }

        return redirect()->route('pelatihans.index', $pelatihan->id)
        ->with('success', 'Pelatihan updated successfully.');
    }
    public function destroy(Pelatihan $pelatihan)
    {
        $pelatihan->delete();
        return redirect()->route('pelatihans.index')->with('success', 'Pelatihan deleted successfully.');
    }
}

