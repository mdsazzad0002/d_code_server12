<?php

namespace App\Http\Controllers\frontend;

use App\Models\JobPost;
use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class jobpostcontroller extends Controller
{
    public function index($slug){

        if ($slug) {
            $category = category::where('status', 1)->get();
            $job_details = JobPost::where('slug', $slug)->first();
            return view('frontend.job.index', compact('job_details','category'));
        } else {
            abort(404);
        }

    }
}
