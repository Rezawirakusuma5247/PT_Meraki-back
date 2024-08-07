<?php
namespace App\Http\Controllers;
use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::all();
        return view('slide.index', compact('slides'));
    }

    public function create()
    {
        return view('slide.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('slides', 'public');

        Slide::create([
            'image' => $imagePath,
        ]);

        return redirect()->route('slides.index');
    }

    public function edit(Slide $slide)
    {
        return view('slide.edit', compact('slide'));
    }

    public function update(Request $request, Slide $slide)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('slides', 'public');
            $slide->update(['image' => $imagePath]);
        }

        return redirect()->route('slides.index');
    }

    public function destroy(Slide $slide)
    {
        $slide->delete();
        return redirect()->route('slides.index');
    }
}

