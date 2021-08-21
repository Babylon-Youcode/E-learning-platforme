<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index()
    {

        switch (Auth::user()->role) {
            case 'USR':
                return redirect()->route('user.home');
                break;
            case 'ADM':
                return redirect()->route('admin.home');
                break;
            case 'TAC':
                return redirect()->route('teacher.home');
                break;
            default:
                return view('home');
            break;
        }
        return view('home');
    }
}
