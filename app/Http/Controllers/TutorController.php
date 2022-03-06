<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutor;

class TutorController extends Controller
{
    public function index()
    {
        $tutors = Tutor::all();
        return view('admin.tutor', compact('tutors'));
    }
    public function show(Tutor $tutor)    {

        return  view('admin.tutorDetails', compact('tutor'));
    }
    public function store(Request $request, Tutor $tutor)
    {
        $request->validate([
            'email' => ['required', 'email','unique:tutors']
        ]);
        $tutor->create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'gender' => $request->gender,
            'language' => $request->language,
            'number' => $request->number,
            'email' => $request->email,
            'dob' => $request->dob,
            'country' => $request->country,
            'hizb' => $request->hizb,
            'academic_qualification' => $request->acad_qualification,
            'interview_date' => $request->interview_date,
            'social_media' => $request->social_media,
            'npk_name' => $request->nok_name,
            'nok_email' => $request->nok_email,
            'nok_relationship' => $request->relationship,
        ]);
        return  view('ramadan.success');
    }
}
