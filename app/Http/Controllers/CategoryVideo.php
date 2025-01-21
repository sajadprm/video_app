<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;

class CategoryVideo extends Controller
{
    public function index(Category $category)
    {
        $videos=$category->videos()->paginate(1);
         $title=$category->name;

      return view('Videos.index',compact('videos','title'));
    }
}
