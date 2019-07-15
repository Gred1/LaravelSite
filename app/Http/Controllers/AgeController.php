<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function store()
    {
        return redirect('/');
    }

    public function luck()
    {
        return view('luck');
    }
}
