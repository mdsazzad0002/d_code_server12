<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Point;

class PostReport extends Model
{
    use HasFactory;
    public function point()
    {
        return $this->morphMany(Point::class, 'pointable');
    }
}
