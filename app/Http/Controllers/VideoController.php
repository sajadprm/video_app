<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideoRequest;
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


    public function store(StoreVideoRequest $request)
    {

        try {

            $video = Video::create(['name' => $request->title, 'length' => $request->length, 'url' => $request->url,
                'slug' => $request->slug, 'description' => $request->description, 'thumbnail' => $request->thumbnail]);
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
}
