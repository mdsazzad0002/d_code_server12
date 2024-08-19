<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class District extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $appends = ['user_name','status_name'];

    public function user(): BelongsTo
   {
       return $this->belongsTo(User::class, 'creatorId', 'id');
   }

   public function getStatusNameAttribute()
    {
        return $this->status == 1 ? 'Active' : 'Inactive';
    }
    public function getUserNameAttribute(){
        return $this->user->name ?? null;

    }
}
