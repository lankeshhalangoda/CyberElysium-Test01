<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.index');
    }

    public function student()
    {
        return view('pages.student.index');
    }
}


