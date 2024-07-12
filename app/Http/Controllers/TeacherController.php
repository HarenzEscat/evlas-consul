<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Student;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    public function show($id)
{
    // Fetch a single student by ID
    $student = Student::findOrFail($id);

    // Fetch a collection of teachers
    $teachers = Teacher::all();

    dd($student, $teachers); // Dump and die to see the structure

    return view('your_view_name', compact('students', 'teachers'));
}


}

