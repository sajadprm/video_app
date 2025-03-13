<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckVerifyEmail;
use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequesr;
use App\Http\Requests\UpdateVideoRequest;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{



    public function index()
    {

    }

    public function create()
    {
        $categories=Category::all();
        return view('Videos.create',compact('categories'));
    }


    public function store(StoreVideoRequest $request)
    {

        try {


            $video=$request->user()->videos()->create($request->all());

            if ($video) {
                return redirect()->route('index')->with(['alert' => 'ویدیو مورد نظر با موفقیت ذخیره شد']);
            }
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
        }


    }


    public function show(Request $request,Video $video)
    {




        return view('Videos.show',compact('video'));

    }


    public function edit(Video $video)
    {
        $categories=Category::all();
        return view('Videos.edit',compact('video','categories'));
    }


    public function update(UpdateVideoRequest $request , Video $video)
    {


        $video->update($request->all());
        return redirect()->route('video.show',$video->slug)->with('alert',__('messages.videoEdited'));
    }
}
