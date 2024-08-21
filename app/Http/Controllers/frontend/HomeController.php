<?php

namespace App\Http\Controllers\frontend;
use App\Models\category;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\JobPost;
use App\Models\post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $banner = Banner::where('status', 1)->get();
        $category = category::where('status', 1)->paginate(15);
        return view('frontend.home.index', compact('category', 'banner'));
    }


    public function get_data_search(Request $request){
        // return $request;
        $now = \Carbon\Carbon::now();
        if(isset($request->query_data)){

            $post = post::where('status', 1)
                    ->where('tilte','LIKE','%'. $request->query_data.'%')
                    ->orWhere('short_details' ,'LIKE','%'.$request->query_data.'%')
                    ->orWhere('details','LIKE','%'.$request->query_data.'%')
                    ->select('tilte', 'short_details','slug','uploads_id')
                    ->limit(8)
                    ->get();

            $job = JobPost::where('status', 1)
                    ->where('title','LIKE','%'. $request->query_data.'%')
                    ->orWhere('short_details' ,'LIKE','%'.$request->query_data.'%')
                    ->orWhere('long_details','LIKE','%'.$request->query_data.'%')
                    ->orWhere('company_name','LIKE','%'.$request->query_data.'%')
                    ->orWhere('company_type','LIKE','%'.$request->query_data.'%')
                    ->orWhere('location','LIKE','%'.$request->query_data.'%')
                    ->where('deadline','>=',$now)
                    ->select('title as tilte', 'short_details','slug')
                    ->limit(8)
                    ->get();

          return   $post->concat($job);


        }else{
            return '';
        }
    }
}
