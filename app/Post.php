<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    protected $filliable = ['title', 'slug', 'body', 'excerpt','category_id','published_at'];
    protected $dates = ['published_at'];

    public function getRouteKeyName(){
        return 'slug';
    }

    public function category() //$post->category
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::Class);
    }

    public function scopePublished($query)
    {
        $query->whereNotNull('published_at')
        ->where('published_at', '<=', Carbon::now())
        ->latest('published_at');
    }
    
}
