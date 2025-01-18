<?php

namespace App\Models;
// use Laravel\Scout\Searchable;


use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Point;
class post extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'created_at' => 'date:d-M-Y h:s A',
    ];
    protected $appends = ['status_name', 'category_name', 'subcategory_name', 'uploads_url','details_url', 'comment_count'];
    public function users(){
        return $this->hasOne(User::class,'id' ,'user_id' );
    }

    public function category(){
        return $this->hasOne(category::class, 'id', 'category_id');
    }
    public function subcategory(){
        return $this->hasOne(subcategory::class, 'id', 'subcategory_id');
    }

    public function getStatusNameAttribute(){
        return $this->status == 1 ? 'Active' : "Inactive";
    }

    public function getCategoryNameAttribute()
    {
        return $this->category->name ?? '';
    }

    public function getSubcategoryNameAttribute(){
        return $this->subcategory->name ?? '';
    }

    public function getUploadsUrlAttribute(){
        return dynamic_asset($this->uploads_id);
    }
    public function getDetailsUrlAttribute(){
        return url('post/'.$this->slug);
    }

    public function comments(){
        return $this->hasMany(comment::class, 'post_id');
    }

    public function getCommentCountAttribute(){
        return $this->comments->count();

    }

    public function getLikeAttribute(){
        $totalLikes = $this->comments()->sum('upvote');
        $totalDislikes = $this->comments()->sum('downvote');

        return [
            'upvote' => $totalLikes,
            'downvote' => $totalDislikes
        ];
    }


    /**
     * Get all of the comments for the post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */


    public function point()
    {
        return $this->morphMany(Point::class, 'pointable');
    }

}
