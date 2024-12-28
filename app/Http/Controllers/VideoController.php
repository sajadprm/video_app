<?php

namespace App\Http\Controllers;

use App\Models\Video;
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


    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'length'=>'required|integer',
            'slug'=>'required|unique:videos,slug',
            'url'=>'required|url',
            'thumbnail'=>'required'
        ]);
        try {

            $video=Video::create(['name'=>$request->title,'length' => $request->length,'url' => $request->url,
                'slug'=>$request->slug,'description' => $request->description,'thumbnail' => $request->thumbnail]);
            if ($video)
            {
                return redirect()->route('index')->with(['alert'=>'ویدیو مورد نظر با موفقیت ذخیره شد']);
            }
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
        }


    }
}
