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
                return view('user.home');
                break;
            case 'ADM':
                return view('admin.home');
                break;
            case 'TAC':
                return view('teacher.home');
                break;
            default:
                return view('home');
            break;
        }
        return view('home');
    }
}
