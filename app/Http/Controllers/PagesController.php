<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function professional()
    {
        return view('professional');
    }

    public function amateur()
    {
        return view('amateur');
    }

    public function student()
    {
        return view('student');
    }
}
