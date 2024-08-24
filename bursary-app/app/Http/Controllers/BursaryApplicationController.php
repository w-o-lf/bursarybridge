<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BursaryApplication;

class BursaryApplicationController extends Controller
{
    // Show the form to create a new bursary application
    public function showForm()
    {
        return view('bursary.create');
    }

    // Handle form submission
    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:15',
            'date_of_birth' => 'required|date',
            'highest_education' => 'required|string|max:255',
            'institution_name' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'year_of_study' => 'required|integer',
            'financial_need' => 'required|string',
            'family_income' => 'required|integer',
            'other_scholarships' => 'nullable|string|max:255',
            'scholarship_amount' => 'required|integer',
            'extracurricular_activities' => 'nullable|string',
            'career_goals' => 'nullable|string',
            'volunteer_work' => 'nullable|string',
            'references' => 'nullable|string',
        ]);

        BursaryApplication::create($validatedData);

        return redirect()->route('bursary.application')->with('success', 'Application submitted successfully!');
    }

    // Display a list of all applications
    public function index()
    {
        $applications = BursaryApplication::all();
        return view('bursary.index', compact('applications'));
    }

    // Show the form to edit an existing application
    public function edit($id)
    {
        $application = BursaryApplication::findOrFail($id);
        return view('bursary.edit', compact('application'));
    }

    // Handle the update of an application
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:15',
            'date_of_birth' => 'required|date',
            'highest_education' => 'required|string|max:255',
            'institution_name' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'year_of_study' => 'required|integer',
            'financial_need' => 'required|string',
            'family_income' => 'required|integer',
            'other_scholarships' => 'nullable|string|max:255',
            'scholarship_amount' => 'required|integer',
            'extracurricular_activities' => 'nullable|string',
            'career_goals' => 'nullable|string',
            'volunteer_work' => 'nullable|string',
            'references' => 'nullable|string',
        ]);

        $application = BursaryApplication::findOrFail($id);
        $application->update($validatedData);

        return redirect()->route('bursary.index')->with('success', 'Application updated successfully!');
    }

    // Handle the deletion of an application
    public function destroy($id)
    {
        $application = BursaryApplication::findOrFail($id);
        $application->delete();

        return redirect()->route('bursary.index')->with('success', 'Application deleted successfully!');
    }
}
