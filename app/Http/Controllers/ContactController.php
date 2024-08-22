<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Display all contacts (for admin view)
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

    // Store a new contact message
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($request->all());

        // Send email
        // Mail::to('info@merakip.com')->send(new ContactMessageMail($contact));

        return redirect()->route('thanks')->with('success', 'Message sent successfully!');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Pelatihan deleted successfully.');
    }


}

