<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        return view('Videos.create');
    }
}
