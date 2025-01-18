<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Point extends Model
{
    use HasFactory;
    protected $fillable = ['pointable_id', 'pointable_type', 'point', 'type', 'user_id'];
    protected $hidden = ['pointable'];
    protected $with = [];

    public function pointable()
    {
        return $this->morphTo();
    }
}
