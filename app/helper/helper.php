<?php

use Carbon\Carbon;
use App\Models\post;
use App\Models\Vote;
use App\Models\comment;
use App\Models\JobPost;
use App\Models\uploads;
use App\Models\category;
use App\Models\ReportType;
use App\Models\subcategory;
use App\Models\GeneralSetting;
use App\Models\ContributeSummarye;
use App\Models\Point;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

function static_asset($string_data)
{
    return asset('public/' . $string_data);
    // return asset( $string_data);

}

function file_type($file_mime_type, $file_extension)
{
    // dd($file_mime_type);
    if ($file_mime_type == 'image'  || $file_mime_type == 'application') {
        $image = ['png', 'jpg', 'gif', 'webp', 'jpeg', 'pdf', 'docx'];
        $file_extension = strtolower($file_extension);
        if (in_array($file_extension, $image)) {
            return true;
        }
    }else{
        return false;
    }
}

function uploads($file, $id = null, $for = 'general', $type = 'file')
{
    if($type == 'url'){
        if($id != null){
            $uploads = uploads::find($id);
            if($uploads){
                $uploads->update(
                    [
                        'name' => '',
                        'external' => $file,
                        'extension' => explode('.',$file)[-0],
                        'size' => 0,
                        'creator_id'=>auth()->user()->id ?? 0,
                        'for'=>$for,
                        'old_name'=> $file
                    ]
                );
                return $uploads->id;
            }else{
                $uploads =  uploads::create([
                     'name' => '',
                     'external' => $file,
                     'extension' => explode('.',$file)[-0],
                     'size' => 0,
                     'creator_id'=>auth()->user()->id ?? 0,
                     'for'=>$for,
                     'old_name'=> $file
                 ]);
                 return $uploads->id;
            }
        }
       $uploads =  uploads::create([
            'name' => '',
            'external' => $file,
            'extension' => explode('.',$file)[-0],
            'size' => 0,
            'creator_id'=>auth()->user()->id ?? 0,
            'for'=>$for,
            'old_name'=> $file
        ]);
        return $uploads->id;
    }else{

        $file_extension = $file->getClientOriginalExtension();
        $file_name = (rand (1000,100000).time() * 40202) . '.' . $file_extension;

        $file_temp_name  =  $file->getRealPath();
        $orginalname = $file->getClientOriginalName();
        $file_size = $file->getSize();

        $file_mime_type = $file->getMimeType();
        $file_mime_type = explode('/', $file_mime_type)[0];

            if (file_type($file_mime_type, $file_extension)) {
                $destinationPath = public_path() . '/uploads/';
                $file->move($destinationPath, $file_name);
                if ($id != null) {
                    $file_find = uploads::find($id);
                    if ($file_find) {
                        $oldFilePath = $destinationPath . '/' . $file_find->name;

                        // Check if the old file exists and delete it
                        if (file_exists($oldFilePath) && is_file($oldFilePath)) {
                            unlink($oldFilePath);
                        }
                        $file_find->name = $file_name;
                        $file_find->extension = $file_extension;
                        $file_find->size = $file_size;
                        $file_find->save();
                    } else {
                        $file_find = uploads::create([
                        'name' => $file_name,
                        'extension' => $file_extension,
                        'size' => $file_size,
                        'creator_id'=>auth()->user()->id ?? 0,
                        'for'=>$for,
                        'old_name'=> $orginalname
                    ]);
                }
            } else {
                $file_find = uploads::create([
                    'name' => $file_name,
                    'extension' => $file_extension,
                    'size' => $file_size,
                    'creator_id'=>auth()->user()->id ?? 0,
                    'for'=>$for,
                    'old_name'=> $orginalname
                ]);
            }
        }else{
            return 0;
        }
    }
    //Move Uploaded File
    return $file_find->id;
}

function dynamic_asset($id)
{
    $destinationPath = 'uploads/';
    if ($id != null || $id != '') {
        if ($file1 = uploads::find($id)) {

            if($file1->name == ''){
                return $file1->external;
            }

            $file1 = $destinationPath . $file1->name;
            if (File::exists(public_path($file1)) || is_dir(public_path($file1))) {
                return static_asset($file1);
            } else {
                $file = $destinationPath . 'fixing.jpg';
                return static_asset($file);
            }
        } else {
            $file = $destinationPath . 'fixing.jpg';
            return static_asset($file);
        }
    }else{
        $file = $destinationPath . 'fixing.jpg';
        return static_asset($file);
    }
}


function asset_unlink($id)
{

    $destinationPath = 'uploads/';
    if ($id != null && $id != '' && $id != 0) {
        $file1 = $destinationPath . uploads::find($id)->name;
        // return static_asset($file1);
        if (File::exists(public_path($file1)) || is_dir(public_path($file1))) {
            if(unlink( public_path($file1))){
                return true;
            }else{
                return false;
            }
        }else{
            return true;
        }
    }
    return true;
}

function category_head($items){
    return category::where('status', 1)->select('name','slug','description','uploads_id')->limit($items)->get();
}
function category_subcategory($category_slug, $items){
    $category_id = category::where('status', 1)->where('slug',$category_slug)->get()->first();
    if($category_id){
        return subcategory::where('status', 1)->where('category_id', $category_id->id)->select('name','slug','description','uploads_id')->limit($items)->get();
    }
}


function general_setting($key){
    $value = GeneralSetting::where('key', $key)->select('title')->get()->first();
    if($value){
        $value = $value->title;
        if (str_contains($key, 'logo')) {
            $value = dynamic_asset($value);
        }
        return $value;
    }else{
        return null;
    }

}

function vote_cookie($commnent_id){
    return $_COOKIE[$commnent_id] ??  '' ;
}




// report contribute
 function contribute_report_update($user_id, $type)
{
    if($type == 'vote'){
         $total_vote = Vote::where('user_id', $user_id)
            ->select(DB::raw('SUM(downvote) as dvote'), DB::raw('SUM(upvote) as uvote'))
            ->first();

        if($total_vote != null){
            $contribute_summary = ContributeSummarye::where('user_id', $user_id)->first();
            if($contribute_summary){
                $contribute_summary->downvote = $total_vote->dvote;
                $contribute_summary->upvote = $total_vote->uvote;
                $contribute_summary->save();
                return true;
            }else{
                $contribute_summary = new ContributeSummarye;
                $contribute_summary->user_id = $user_id;
                $contribute_summary->post = 0;
                $contribute_summary->comment = 0;
                $contribute_summary->downvote = $total_vote->dvote;
                $contribute_summary->upvote = $total_vote->uvote;
                $contribute_summary->save();
                return true;
            }

        }else{
            return false;
        }
    }elseif ($type=='comment') {
        $total_comment =  comment::where('user_id', $user_id)->count();

            $contribute_summary = ContributeSummarye::where('user_id', $user_id)->first();
            if($contribute_summary){
                $contribute_summary->comment = $total_comment;
                $contribute_summary->save();
                return true;
            }else{
                $contribute_summary = new ContributeSummarye;
                $contribute_summary->user_id = $user_id;
                $contribute_summary->post = 0;
                $contribute_summary->comment = $total_comment;
                $contribute_summary->downvote = 0;
                $contribute_summary->upvote = 0;
                $contribute_summary->save();
                return true;
            }
            return false;

    }elseif ($type=='post') {
        $total_post =  post::where('user_id', $user_id)->count();


        $contribute_summary = ContributeSummarye::where('user_id', $user_id)->first();
        if($contribute_summary){
            $contribute_summary->post = $total_post;
            $contribute_summary->save();
            return true;
        }else{
            $contribute_summary = new ContributeSummarye;
            $contribute_summary->user_id = $user_id;
            $contribute_summary->comment = 0;
            $contribute_summary->post = $total_post;
            $contribute_summary->downvote = 0;
            $contribute_summary->upvote = 0;
            $contribute_summary->save();
            return true;
        }
        return false;

    }


}
//end  report contribute


function jobPost($cat_id = null, $items = 1){
        $job_post = [];
        $today = \Carbon\Carbon::now();
        if($cat_id == null){
            if(auth()->user()){
                $job_post = JobPost::where(function ($query){
                    if(auth()->user()->chosen_category !=null){
                        $category_data = explode(',', auth()->user()->chosen_category);
                        foreach ($category_data as $key => $value) {
                            $query->orWhere('category_id',  'LIKE', '%'.$value.'%');
                        }
                    }
                })->where('deadline', '>=', $today)->inRandomOrder()->limit($items)->get();
            }else{

                $job_post = JobPost::where('deadline', '>=', $today)->inRandomOrder()->limit($items)->get();
            }
        }else{
        $cat_id = category::where('slug', $cat_id)->first();
            if($cat_id){
                $cat_id = $cat_id->id;
                $job_post = JobPost::where('deadline', '>=', $today)->where('category_id',  'LIKE', '%'.$cat_id.'%')->inRandomOrder()->limit($items)->get();
            }else{
                $job_post = JobPost::where('deadline', '>=', $today)->where('category_id',  'LIKE', '%'.$cat_id.'%')->inRandomOrder()->limit($items)->get();

            }
        }

        return $job_post;
}



function report_type()
{
    return $report_type = ReportType::all();
}

/**
 * Summary of point
 * @param integer $id
 * @param mixed $class
 * @param integer     $point
 * @param boolean $status
 * @return void
 */
function point_set($id, $class, $points, $status = 1){

    if(auth()->user()){
        $point = new Point();
        $point->pointable_id = $id;
        $point->pointable_type = $class;
        $point->type = $status;
        $point->user_id = auth()->user()->id;
        $point->point = $points;
        $point->save();

        $user = User::find(auth()->user()->id);
        $user->point = $user->point + $points;
        $user->save();
    }

}
