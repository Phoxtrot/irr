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
    // Filter by gender
    public function male()
    {
       $students = Student::where('gender','male')->get();
       return  view('admin.gender.male', compact('students'));
    }
    public function female()
    {
       $students = Student::where('gender','female')->get();
       return  view('admin.gender.female', compact('students'));
    }
    // Filter by language
    public function yoruba()
    {
        $students = Student::where('language','yoruba')->get();
       return  view('admin.language.yoruba', compact('students'));
    }
    public function igbo()
    {
        $students = Student::where('language','igbo')->get();
       return  view('admin.language.igbo', compact('students'));
    }
    public function hausa()
    {
        $students = Student::where('language','hausa')->get();
       return  view('admin.language.hausa', compact('students'));
    }
    public function others()
    {
        $students = Student::where('language','others')->get();
       return  view('admin.language.others', compact('students'));
    }
    // Preffered daysInMonth
    public function mwf()
    {
        $students = Student::where('preffered_days','Mondays, Wednesdays, Fridays')->get();
       return  view('admin.days.mwf', compact('students'));
    }
    public function tts()
    {
        $students = Student::where('preffered_days','Tuesdays, Thursdays, Saturdays')->get();
       return  view('admin.days.tts', compact('students'));
    }
}
