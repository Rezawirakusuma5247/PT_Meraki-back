<?php


namespace App\Http\Controllers;

use App\Models\Subcription;
use Illuminate\Http\Request;
use App\Exports\SubcriptionsExport;
use App\Imports\SubcriptionsImport;
use Maatwebsite\Excel\Facades\Excel;

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

        Subcription::create($request->all());
        return redirect()->route('thanks')->with('success', 'Data imported successfully!');

    }

    public function export()
    {
        return Excel::download(new SubcriptionsExport, 'subcriptions.xlsx');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx'
        ]);

        Excel::import(new SubcriptionsImport, $request->file('file'));

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}

