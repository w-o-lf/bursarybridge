<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BursaryApplicationController extends Controller
{
    // Show the bursary application form
    public function showForm()
    {
        return view('bursary.application');
    }

    // Handle the submission of the form
    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'educational_background' => 'required|string',
            'financial_need' => 'required|string',
        ]);

        // Save the application data to the database or process it
        // BursaryApplication::create($validatedData);

        return redirect()->route('bursary.application')->with('success', 'Your application has been submitted successfully.');
    }
}

