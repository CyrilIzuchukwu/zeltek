<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Event;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //

    public function blog_details($id)
    {
        $blog_detail = Blog::findorFail($id);
        // dd($blog_detail);
        return view('blog_details', compact('blog_detail'));
    }


    public function event_details($id)
    {
        $event_details = Event::findorFail($id);
        return view('event_details', compact('event_details'));
    }
}
