<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobApply extends Model
{
    use HasFactory;
    protected $casts = [
        'created_at' => 'date:d-M-Y h:s A',
    ];
    protected $appends = ['status_name', 'user_name','job_name'];
    public function users()
    {
        return $this->hasOne(User::class, 'id', 'creator_id');

    }
    public function jobs()
    {
        return $this->hasOne(JobPost::class, 'id', 'job_post_id');

    }


    public function getStatusNameAttribute(){
        return $this->status == 1 ? 'Active' : "Inactive";
    }
    public function getJobNameAttribute(){
        return $this->jobs->title ?? '';
    }

    public function getUserNameAttribute()
    {
        return $this->users->name ?? '';
    }

    public function uploads(){
        return $this->belongsTo(uploads::class);
    }
}
