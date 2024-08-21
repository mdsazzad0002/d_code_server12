<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    use HasFactory;

    protected $fillable = ['title','creatorId','status','long_details','short_details','district_id','category_id','start_date','deadline','company_name','company_type','location'];
    protected $casts = [
        'created_at' => 'date:d-M-Y h:s A',
    ];
    protected $appends = ['status_name', 'category_name', 'district_name','uploads_url'];
    public function users(){
        return $this->hasOne(User::class,'id' ,'user_id' );
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
}
