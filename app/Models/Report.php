<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $guarded=[''];

    protected $casts = [
        'created_at' => 'date:d-M-Y h:s A',
    ];
    protected $appends = ['status_name','reporter_name','reporter_to_name'];

    public function getStatusNameAttribute(){
        return $this->status == 1 ? 'Active' : "Inactive";
    }
    public function reporter_to(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function reporter(){
        return $this->hasOne(User::class, 'id', 'reporter_id');
    }
    public function getReporterNameAttribute()
    {
        return $this->reporter->name ?? '';
    }
    public function getReporterToNameAttribute()
    {
        return $this->reporter_to->name ?? '';
    }
}
