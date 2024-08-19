<?php

namespace App\Http\Controllers\frontend;

use App\Models\post;
use App\Models\User;
use App\Models\Vote;
use App\Models\comment;
use App\Models\category;
use App\Models\subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\JobPost;

class FeedController extends Controller
{



     public function index()
    {
        $category = category::where('status', 1)->get();
        $contribute_data = User::withCount(['votes', 'comments', 'posts'])
            ->whereHas('votes', function ($query) {
                $query->where('user_id', '!=', 0);
            })
            ->oRwhereHas('comments', function ($query) {
                $query->where('user_id', '!=', 0);
            })
            ->oRwhereHas('posts', function ($query) {
                $query->where('user_id', '!=', 0);
            })
            ->orderBy('posts_count', 'desc')
            ->orderBy('comments_count', 'desc')
            ->orderBy('votes_count', 'desc')
            ->get();




        return view('frontend.feed.index', compact('category', 'contribute_data'));
    }





    public function feed_load(){


        if(auth()->user()){
            if(auth()->user()->chosen_category != null){
                $category_list =  explode(',',auth()->user()->chosen_category);
                if(count($category_list) > 3){
                    $posts_data_format_feed    = post::whereIn('category_id', $category_list)->inRandomOrder()->limit(3)->get();
                }else{
                    $rand_no = rand(1, 20);
                    if($rand_no % 2 == 0){
                        $posts_data_format_feed    = post::whereIn('category_id', $category_list)->inRandomOrder()->limit(3)->get();
                    }else{
                        $posts_data_format_feed    = post::inRandomOrder()->limit(3)->get();
                    }
                }
            }else{
                $posts_data_format_feed    = post::inRandomOrder()->limit(3)->get();
            }
        }else{
            $posts_data_format_feed    = post::inRandomOrder()->limit(3)->get();
        }

        // jobPost
        $job_post = jobPost();
        return view('frontend.feed.post', compact('posts_data_format_feed','job_post'));
    }
}
