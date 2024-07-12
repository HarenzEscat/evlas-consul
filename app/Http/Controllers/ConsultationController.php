<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function index()
    {
        // Your logic here, for example, returning a view
        return view('consultant.Layouts.consultation');
    }

    // ConsultationController.php

public function store(Request $request)
{
    // Validate the request data
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'course' => 'required|string|max:255',
        'purpose' => 'required|string',
        'department' => 'required|string',
        'meeting_mode' => 'required|string',
        'online_preference' => 'nullable|string',
        'schedule' => 'required|date',


    ]);
   // Ensure all variables passed to the view are initialized
   $name = session('name', '');
   $course = session('course', '');

   // Add other variables as needed

   return view('consultant.form', compact('name', 'course'));
    // Save the data to the database
    Appointment::create($validated);

}

public function showForm()
{
    return view('consultant.form');
}

public function submitForm(Request $request)
{
    // Handle form submission logic here
    // For example, save data to the database or send an email

    return redirect()->route('consultation.form')->with('success', 'Appointment confirmed successfully.');
}
}

