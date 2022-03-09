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
    public function apply(Request $request, Tutor $tutor)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'language' => 'required',
            'number' => 'required',
            'dob' => 'required',
            'country' => 'required',
            'hizb' => 'required',
            'acad_qualification' => 'required',
            'interview_date' => 'required',
            'social_media_1' => 'required',
            'social_media_2' => 'required',
            'nok_name' => 'required',
            'nok_number' => 'required',
            'nok_email' => 'required',
            'nok_relationship' => 'required',
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
            'social_media_1' => $request->social_media_1,
            'social_media_2' => $request->social_media_2,
            'nok_name' => $request->nok_name,
            'nok_number' => $request->nok_number,
            'nok_email' => $request->nok_email,
            'nok_relationship' => $request->nok_relationship,
        ]);
        return redirect()->route('ramadansuccess');

    }

    // Filter by gender
    public function male()
    {
       $tutors = Tutor::where('gender','male')->get();
       return  view('admin.tutor.gender.male', compact('tutors'));
    }
    public function female()
    {
       $tutors = Tutor::where('gender','female')->get();
       return  view('admin.tutor.gender.female', compact('tutors'));
    }
    // Filter by language
    public function yoruba()
    {
        $tutors = Tutor::where('language','yoruba')->get();
       return  view('admin.tutor.language.yoruba', compact('tutors'));
    }
    public function igbo()
    {
        $tutors = Tutor::where('language','igbo')->get();
       return  view('admin.tutor.language.igbo', compact('tutors'));
    }
    public function hausa()
    {
        $tutors = Tutor::where('language','hausa')->get();
       return  view('admin.tutor.language.hausa', compact('tutors'));
    }
    public function others()
    {
        $tutors = Tutor::where('language','others')->get();
       return  view('admin.tutor.language.others', compact('tutors'));
    }
    // Preffered daysInMonth
    public function ten()
    {
        $tutors = Tutor::where('hizb','10')->get();
       return  view('admin.tutor.days.ten', compact('tutors'));
    }
    public function twenty()
    {
        $tutors = Tutor::where('hizb','20')->get();
       return  view('admin.tutor.days.twenty', compact('tutors'));
    }
    public function forty()
    {
        $tutors = Tutor::where('hizb','40')->get();
       return  view('admin.tutor.days.forty', compact('tutors'));
    }
    public function sixty()
    {
        $tutors = Tutor::where('hizb','0')->get();
       return  view('admin.tutor.days.sixty', compact('tutors'));
    }
}
