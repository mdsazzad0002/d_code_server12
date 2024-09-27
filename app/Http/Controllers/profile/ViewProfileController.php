<?php

namespace App\Http\Controllers\profile;

use DateTime;
use Carbon\Carbon;

use App\Models\post;
use App\Models\User;
use App\Models\Vote;
use App\Models\comment;
use App\Models\JobPost;
use App\Models\JobApply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ViewProfileController extends Controller
{
    public function report30days($data_array){
        $data = [];
        for ($i = 1; $i <= 30; $i++){
            $data[$i] = $data_array[$i] ?? 0;
        }

        return $data;
    }

    public function date_format($items){
        $day_counts = [];
        foreach ($items as $index => $item) {
            $day_number = (int) (new DateTime($index))->format('d'); // 'z' is the day of the year (0-based), add 1 for 1-based
            $day_counts[$day_number] = $item;
        }
        return $day_counts;
    }
    public function index($id){
        if($id != null && !empty($id)){
             $user = User::where('username', $id)->get()->first();
            if($user){

                 $date_range = Carbon::now()->subDay(30);
                 $date_today = Carbon::now();


                // vote report  profile dashboard
                 $vote_for_report = vote::whereBetween('updated_at', [$date_range, $date_today])
                                                ->where('user_id', $user->id)
                                                ->select(DB::raw('COUNT(*) AS votes_items'),'dd')
                                                ->groupBy('dd')
                                                ->pluck( 'votes_items','dd')
                                                ->toArray();


                $vote_for_report = $this->report30days($vote_for_report);
                 $vote_array_values = json_encode(array_values($vote_for_report));



                // post report  profile dashboard
                 $post_for_report = post::whereBetween('updated_at', [$date_range, $date_today])
                                                ->where('user_id', $user->id)
                                                ->select(DB::raw('COUNT(*) AS votes_items'),'dd')
                                                ->groupBy('dd')
                                                ->pluck( 'votes_items','dd')
                                                ->toArray();


                $post_for_report = $this->report30days($post_for_report);
                $post_array_values = json_encode(array_values($post_for_report));


                // post report  profile dashboard
                 $comment_for_report = comment::whereBetween('updated_at', [$date_range, $date_today])
                                                ->where('user_id', $user->id)
                                                ->select(DB::raw('COUNT(*) AS votes_items'),'dd')
                                                ->groupBy('dd')
                                                ->pluck( 'votes_items','dd')
                                                ->toArray();

                $comment_for_report = $this->report30days($comment_for_report);

                 $comment_array_values = json_encode(array_values($comment_for_report));
                 $days30 = json_encode(array_keys($comment_for_report));


                 // job report  profile dashboard
                  $job_for_report = JobPost::whereBetween('updated_at', [$date_range, $date_today])
                                                ->where('creatorId', $user->id)
                                                ->select(DB::raw('COUNT(*) AS votes_items'),DB::raw('DATE(updated_at) AS date'))
                                                ->groupBy('date')
                                                ->pluck( 'votes_items','date')
                                                ->toArray();

                 $job_for_report = $this->date_format($job_for_report);
                $job_for_report = $this->report30days($job_for_report);

                 $job_for_report = json_encode(array_values($job_for_report));

                 // job Apply report  profile dashboard
                  $job_apply_for_report = JobApply::whereBetween('updated_at', [$date_range, $date_today])
                                                ->where('creator_id', $user->id)
                                                ->select(DB::raw('COUNT(*) AS votes_items'),DB::raw('DATE(updated_at) AS date'))
                                                ->groupBy('date')
                                                ->pluck( 'votes_items','date')
                                                ->toArray();

                 $job_apply_for_report = $this->date_format($job_apply_for_report);
                $job_apply_for_report = $this->report30days($job_apply_for_report);

                 $job_apply_for_report = json_encode(array_values($job_apply_for_report));








                $posts = post::where('user_id', $user->id)->orderBy('id','desc')->limit(3)->get();
                return view('profile.profile', compact('posts', 'user','vote_array_values','post_array_values','days30','comment_array_values','job_for_report','job_apply_for_report'));
            }else{
                return abort(403,'User Not found');
            }
        }else{
            return abort(404,'Page Not Found');
        }

    }

    public function comment(Request $request, $id){
        if($id != null && !empty($id)){
             $user = User::where('username', $id)->get()->first();
            if($user){
                $comments = comment::where('user_id',  $user?->id)->orderBy('id','desc')->paginate(10);
                if($request->ajax()){
                    return view('profile.comment.partials.comment', compact('comments','user'));

                }else{
                    return view('profile.comment.index', compact('comments','user'));

                }

            }else{
                return abort(404,'Page Not Found');
            }
        }else{
            return abort(404,'Page Not Found');
        }

    }
    public function vote($id){
        if($id != null && !empty($id)){
             $user = User::where('username', $id)->get()->first();
            if($user){
                $votes = Vote::where('user_id', $user->id)->orderBy('id','desc')->paginate(15);
                return view('profile.vote.index', compact('votes','user'));

            }else{
                return abort(404,'Page Not Found');
            }
        }else{
            return abort(404,'Page Not Found');
        }

    }
    public function post($id){
        if($id != null && !empty($id)){
             $user = User::where('username', $id)->get()->first();
            if($user){
                $posts = post::where('user_id', $user->id)->orderBy('id','desc')->paginate(30);
                return view('profile.post.index', compact('posts','user'));

            }else{
                return abort(404,'Page Not Found');
            }
        }else{
            return abort(404,'Page Not Found');
        }

    }


    public function job($id){
        if($id != null && !empty($id)){
             $user = User::where('username', $id)->get()->first();
            if($user){
                $posts = JobPost::where('creatorId', $user->id)->orderBy('id','desc')->paginate(30);
                return view('profile.job-post.index', compact('posts','user'));

            }else{
                return abort(404,'Page Not Found');
            }
        }else{
            return abort(404,'Page Not Found');
        }

    }

    public function list_selected($id){

        $list_applied_list = JobApply::where('job_post_id', $id)->get();
        return view('profile.job-post.partials.viewProfile', compact('list_applied_list'));
    }
    public function applyJob($id){
        if($id != null && !empty($id)){
             $user = User::where('username', $id)->get()->first();

            if($user){
                $posts = JobApply::where('creator_id', $user->id)->orderBy('id','desc')->paginate(30);
                return view('profile.apply_job_list.index', compact('posts','user'));

            }else{
                return abort(404,'Page Not Found');
            }
        }else{
            return abort(404,'Page Not Found');
        }

    }

}
