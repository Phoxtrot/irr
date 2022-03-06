<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tutor;
use App\Models\Student;

class FrontendController extends Controller
{
    public function index()
    {
        $countStudent = Student::count();
        $countTutor = Tutor::count();
        return view ('admin.index', compact('countStudent','countTutor'));
    }
}
