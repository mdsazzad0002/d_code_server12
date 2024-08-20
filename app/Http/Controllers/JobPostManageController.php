<?php

namespace App\Http\Controllers;

use App\Models\JobApply;
use Carbon\Carbon;
use App\Models\post;
use App\Models\Vote;
use App\Models\comment;
use App\Models\category;
use App\Models\subcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\JobPost;
use App\Models\uploads;

class JobPostManageController extends Controller
{
    public function create(){
        $category = category::where('status', 1)->select('id','name')->get();
        $district = District::where('status', 1)->select('id','name')->get();
        return view('backend.job-post.partials.create', compact('category','district'));
    }

    public function store(Request $request)
    {
        // return $request;
        $request->validate(
            [
                'long_details'=> 'required',
                'title'=> 'required',
                'short_details'=> 'required',
                // 'category_id'=> 'required | array',

            ]
        );

        //   return $request;

        $post = new JobPost();
        $post->long_details = $request->long_details;
        $post->title = $request->title;
        if(auth()->user()){
            $user_id = auth()->user()->id;
            $post->creatorId =  $user_id;
        }else{
            $post->creatorId = 0;
        }
        $post->short_details = strip_tags($request->short_details);
        $post->district_id = $request->district_id;
        $post->category_id = is_array($request->category_id) ? implode(',', $request->category_id) : $request->category_id;
        if(isset($request->upload_asset_image)){
            $post->uploads_id = uploads($request->file('upload_asset_image'));
        }
        $post->short_details = $request->short_details;
        $post->start_date = $request->start_date;
        $post->deadline =$request->deadline;
        $post->company_name = $request->company_name;
        $post->company_type = $request->company_type;
        $post->location = $request->location;

        $slug = Str::slug($request->title.Carbon::now()->toDateTimeString() ?? Carbon::now()->toDateTimeString(), '-');
        $post->slug = $slug ?? '';
        $post->save();

        // if(auth()->user()){
        //     if(contribute_report_update(auth()->user()->id, 'post') == false){
        //         return 'something is wrong';
        //     }
        // }

        toastr()->success('Successfully Job Post Created', 'Congrats');

        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(JobPost $post)
    {
        return view('backend.job-post.partials.view', compact('post'));
    }

    public function comment($id)
    {
        $comments = comment::where('post_id', $id)->paginate(100);
        return view('profile.comment.partials.comment', compact('comments'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $jobPost = JobPost::find($id);
        // dd($jobPost);
        $category = category::where('status', 1)->select('id','name')->get();
        $district = District::where('status', 1)->select('id','name')->get();
        return view('backend.job-post.partials.edit', compact('jobPost','category','district'));
    }


    public function comment_edit($id)
    {
        $comment = comment::find($id);
        return view('backend.post.partials.edit_comment', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request;
        // $request->validate(
        //     [
        //         'details'=> 'required',
        //         'title'=> 'required',
        //         'category'=>'required'
        //     ]
        // );

        $jobPost = JobPost::find($id);
        $jobPost->update([
            'title' => $request->title,
            'creatorId' => auth()->user()->id,
            'status' => $request->status ?? 1,
            'long_details' => $request->long_details,
            'short_details' => strip_tags($request->short_details),
            'district_id' => $request->district_id,
            'category_id' => is_array($request->category_id) ? implode(',', $request->category_id) : $request->category_id,
            'start_date' => $request->start_date,
            'deadline' => $request->deadline,
            'company_name' => $request->company_name,
            'company_type' => $request->company_type,
            'location' => $request->location,
        ]);
        return back();
    }

    public function comment_update(Request $request){
        $find_comment= comment::find($request->id);
        if($find_comment){
            $find_comment->comments = $request->details;
            $find_comment->save();
        }else{
            return 'somethisn  is wrong';
        }

        return back();
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id,JobPost $post)
    {
        // $user_id = $post->user_id;

        // Vote::where('post_id', $post->id)->delete();
        // comment::where('post_id', $post->id)->delete();

        $post->delete();

        // if(contribute_report_update($user_id, 'post') == false){
        //     return 'something is wrong';
        // }
        return back();

    }


    public function apply($id){
        if(auth()->user()){
            $jobPost = JobPost::find($id);
            $old_cv = uploads::where('for', 'cv')->where('creator_id', auth()->user()->id)->get();
            return view('frontend.job.job_apply.job_form', compact('jobPost','old_cv'));
        }else{
            return '<a class="btn btn-primary mx-auto d-block" href="'.url('login').'">Login Now</a>';
        }
    }

    public function apply_store(Request $request){
        // return $request;
        if(auth()->user()){
            $creator_id = auth()->user()->id;
            $post_find = JobPost::find($request->post_id);
            if($post_find){
                $job_apply_find = JobApply::where('job_post_id', $request->post_id)->where('creator_id', $creator_id)->first();
                if($job_apply_find){
                    toastr()->error('Already Applied ', 'Error');
                    return back();
                }else{
                    $job_apply = new JobApply;
                    $job_apply->job_post_id = $request->post_id;
                    $job_apply->creator_id = $creator_id;
                    $job_apply->details =  $request->long_details;
                    if($request->file('cv')){
                        $job_apply->cv_file_id = uploads($request->file('cv'), null, 'cv');
                    }elseif($request->has('cv_id')){
                        $job_apply->cv_file_id = $request->cv_id;
                    }else{
                        toastr()->error('Cv Not Found ', 'Error');
                        return back();
                    }

                    $job_apply->details =  $request->long_details;
                    $job_apply->save();

                    toastr()->success('Successfully Applied ', 'Congress');
                    return back();
                }
            }else{
                toastr()->error('Job post not Available', 'Error');
                return back();
            }

        }else{
            return redirect()->route('login');
        }
    }

    public function cvshow($name){
        return view('frontend.job.job_apply.cv', compact('name'));
    }

    public function holderSelected($id){
        if($id){
            $job_data = JobApply::find($id);
            if($job_data){
                $job_data->selected =  $job_data->selected == 0 ? 1 : 0;
                $job_data->save();
                return $job_data;
            }else{
                return 0;
            }
        }else{
            return 0;
        }
    }
}
