<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Section;
use App\Models\Course;
use App\Models\Teacher;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    

    public function create()
    {
        $sections = Section::all();
        $courses = Course::all();
        return view('students.create', compact('sections', 'courses'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'section_id' => 'required|exists:sections,id',
            'course_id' => 'nullable|exists:courses,id',
        ]);

        Student::create($validatedData);

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }
        public function show($id)
    {
        // Fetch a single student by ID
        $student = Student::findOrFail($id);

        // Fetch a collection of teachers
        $teachers = Teacher::all();

        return view('your_view_name', compact('students', 'teachers'));
    }

    
}