<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uploads extends Model
{
    use HasFactory;
    protected $fillable = ['name','extension','size','external','creator_id','for','old_name'];
}
