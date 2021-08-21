<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Enrolment;
use Auth;

class UserController extends Controller
{

    public function home(){
        $enrolenments  = Enrolment::with(['Course'])->where('users_id',Auth::user()->id)->get();
        $totalCourses = Course::count();
        $totalEnrolments = Enrolment::where('users_id',Auth::user()->id)->count();

        $moneySpent = 0;
        foreach($enrolenments as $enrolenment){
            $moneySpent += $enrolenment->course->price;
        }
        return view('user.home',compact('enrolenments','totalCourses','totalEnrolments','moneySpent'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::paginate(12);
        return view('user.course.index', compact('courses'));
    }

    public function enrole($id)
    {
        if(Enrolment::where('users_id',Auth::user()->id)->where('courses_id',$id)->count() > 0){
            return redirect()->route('user.enrolenments.all');
        }
        $enrolenement = Enrolment::create([
            'users_id' => Auth::user()->id,
            'courses_id' => $id
        ]);
        return redirect()->route('user.enrolenments.all');
    }

    public function enrolenments (){
        $enrolenments  = Enrolment::with(['Course'])->where('users_id',Auth::user()->id)->get();
        return view('user.course.enrolments',compact('enrolenments'));
    }

    // public function getDashboard(){
    //     return view('user.home');
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Enrolment::where('id',$id)->where('users_id',Auth::user()->id)->delete();
        return redirect()->route('user.enrolenments.all');
    }
}
