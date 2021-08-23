<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Enrolment;
use App\Models\Course;

use Auth;


class TeacherController extends Controller
{
    public function home(){

        $enrolnments = Enrolment::with(['Course'])->get();
        $courses = Course::where('users_id',Auth::user()->id)->count();
        foreach ($enrolnments as $key => $enrolnment) {
            if($enrolnment->course == null){unset($enrolnments[$key]); continue;}
            if($enrolnment->course->users_id !== Auth::user()->id){unset($enrolnments[$key]); continue;}
        }
        $totalGain = 0;
        foreach ($enrolnments as $enroled){
            $totalGain += $enroled->Course->price;
        }
        return view('teacher.home',compact('enrolnments','totalGain','courses'));
    }

    public function index()
    {
        $data = [
            "teachers" => User::where('role','TAC')->orderBy('id','DESC')->get()
        ];
        return view('teacher.home',$data);
        # code...
    }
}
