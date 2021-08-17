<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            $teachers = Course::with(['User'])->latest()->paginate(5);
            return view('admin.teacher.index', compact('teachers'))
            ->with('i',(request()->input('page',1)- 1)*5);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = User::where('role','TAC')->get();

        return view('admin.teacher.create',compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);
        User::create($request->all());

        return redirect()->route('admin.teacher.all')
            ->with('success', 'Teacher Added successfully.');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $teacher)
    {
        return view('admin.teacher.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $teachers)
    {
        return view('admin.teacher.edit', compact('teachers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $teachers)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $teachers ->update($request->all());

        return redirect()->route('admin.teacher.all')
            ->with('success', 'Teacher updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $cuser
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $teachers)
    {

        $teachers->delete();

        return redirect()->route('admin.teacher.all')
            ->with('success', 'Teacher deleted successfully');
    }
}
