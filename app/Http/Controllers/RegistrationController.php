<?php

namespace App\Http\Controllers;
use App\Models\Pelatihan;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registration($id) {
        $pelatihan = Pelatihan::findOrFail($id);
        return view('registration.regis', compact('pelatihan'));
    }

    public function index() {
        $registrations = Registration::with('pelatihan')->get();
        return view('registration.index', compact('registrations'));
    }
    public function store(Request $request, $id)
{
    // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'number' => 'required|string|max:15',
        'social_media' => 'nullable|string|max:255',
        'role' => 'required|string',
    ]);

    // Create a new registration with the validated data and the pelatihan_id
    $registration = Registration::create([
        'pelatihan_id' => $id,
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'number' => $validatedData['number'],
        'social_media' => $validatedData['social_media'],
        'role' => $validatedData['role'],
    ]);

    // Redirect or return a response, like a success message or a redirect to another page
    return redirect()->route('thanks')->with('success', 'Registration successful!');
}


}
