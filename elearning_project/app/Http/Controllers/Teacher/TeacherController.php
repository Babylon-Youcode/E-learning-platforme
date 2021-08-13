<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class TeacherController extends Controller
{


    public function index()
    {
        $data = [
            "teachers" => User::where('role','TAC')->orderBy('id','DESC')->get()
        ];
        return view('teacher.home',$data);
        # code...
    }
}
