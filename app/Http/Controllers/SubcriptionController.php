<?php


namespace App\Http\Controllers;
use App\Models\Subcription;
use Illuminate\Http\Request;

class SubcriptionController extends Controller
{

    public function index()
    {
        $subcriptions = Subcription::all();
        return view('subcription.index', compact('subcriptions'));
    }
       public function store(Request $request)
        {
            $request->validate([
                'email' => 'required|string|email|max:255',
            ]);

            $subcription = Subcription::create($request->all());

            // Send email
            // Mail::to('info@merakip.com')->send(new ContactMessageMail($contact));

            return redirect()->back()->with('success', 'Message sent successfully!');
        }
    }
