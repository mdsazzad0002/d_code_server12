<?php

namespace App\Models;

use App\Models\JobApply;
use Illuminate\Database\Eloquent\Model;
use App\Models\Point;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobPost extends Model
{
    use HasFactory;

    protected $fillable = ['title','creatorId','status','long_details','short_details','district_id','category_id','start_date','deadline','company_name','company_type','location','enable_apply'];
    protected $casts = [
        'created_at' => 'date:d-M-Y h:s A',
    ];
    protected $appends = ['status_name', 'category_name', 'district_name','uploads_url', 'details_url'];
    public function users(){
        return $this->hasOne(User::class,'id' ,'creatorId' );
    }

    public function category(){
        return $this->hasOne(category::class, 'id', 'category_id');
    }
    public function district(){
        return $this->hasOne(District::class, 'id', 'district_id');
    }

    public function getStatusNameAttribute(){
        return $this->status == 1 ? 'Active' : "Inactive";
    }

    public function getCategoryNameAttribute()
    {
        return $this->category->name ?? '';
    }

    public function getDistrictNameAttribute(){
        return $this->district->name ?? '';
    }
    public function categoryname(){
        $data = [];
        if($this->category_id != null){
            $data = explode(',', $this->category_id);
            $data = category::whereIn('id', $data)->get();
        }
        return $data;
    }

    public function category_list(){
        return category::get()->pluck('name', 'id')->toArray();
    }
    public function getUploadsUrlAttribute(){
        return static_asset('uploads/post-icon-jobs.png');
    }
    public function getDetailsUrlAttribute(){
        return url('job/'.$this->slug);
    }

    public function jobApplys_data(){
        return $this->hasOne(JobApply::class, 'job_post_id', 'id');
    }

    public function point()
    {
        return $this->morphMany(Point::class, 'pointable');
    }

}
