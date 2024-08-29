<?php

namespace App\Http\Controllers;
use App\Models\Pelatihan;
use App\Models\Registration;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RegistrationsExport;
use App\Imports\RegistrationsImport;

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
public function approve($id)
{
    $registration = Registration::findOrFail($id);
    $registration->approved = true;
    $registration->save();

    return redirect()->route('registration.index')->with('success', 'Registration approved successfully.');
}

public function approved()
{
    $approvedRegistrations = Registration::where('approved', true)->with('pelatihan')->get();

    return view('registration.approved', compact('approvedRegistrations'));
}

public function export($pelatihan_id)
    {
        return Excel::download(new RegistrationsExport($pelatihan_id), 'approved_registrations.xlsx');
    }

    // Method to import registrations
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);

        Excel::import(new RegistrationsImport, $request->file('file'));

        return redirect()->back()->with('success', 'Registrations imported successfully!');
    }

    public function done()
{
    $doneRegistrations = Registration::where('approved', true)->get(); // Assuming 'approved' indicates done
    return view('registration.done', compact('doneRegistrations'));
}

public function undo($id)
{
    $registration = Registration::findOrFail($id);
    $registration->approved = false; // Assuming 'approved' indicates done
    $registration->save();

    return redirect()->route('registration.undo')->with('success', 'Registration status reverted!');
}

}

