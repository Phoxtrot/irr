<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('admin.student', compact('students'));
    }
    public function show(Student $student)    {

        return  view('admin.studentDetails', compact('student'));
    }
}
