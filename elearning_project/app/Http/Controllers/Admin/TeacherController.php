<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            $teachers = User::where( 'role','TAC' )->get();
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

        if($request->input('role') == 'teacher'){$role = 'TAC';}
        if($request->input('role') == 'admin'){$role = 'ADM';}
        if($request->input('role') == 'user'){$role = 'USR';}

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input()['password']),
            'role' => $role
        ]);

            // dd($request);
        return redirect()->route('admin.teacher.all')
            ->with('success', 'Teacher Added successfully.');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teachers = User::find($id);
        return view('admin.teacher.show', compact('teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teachers = User::find($id);
        return view('admin.teacher.edit', compact('teachers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role'  => 'required',
        ]);

        User::where('id',$id)->update([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);

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
