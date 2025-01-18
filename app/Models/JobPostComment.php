<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Point;
use Illuminate\Database\Eloquent\Model;

class JobPostComment extends Model
{
    use HasFactory;
    public function point()
    {
        return $this->morphMany(Point::class, 'pointable');
    }
}
