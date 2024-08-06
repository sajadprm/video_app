<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index()
    {
       $latestVideos=Video::latest()->take(6)->get();
       $popularVideos=Video::all()->random(6);
       $mostViewedVideos=Video::all()->random(6);

       return view('index',compact('latestVideos','popularVideos','mostViewedVideos'));
    }
}
