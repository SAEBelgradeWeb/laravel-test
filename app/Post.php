<?php

namespace App;

use App\Scopes\PostCategoryScope;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'excerpt', 'user_id'];

//    protected $hidden = ['user_id'];

    protected static function boot()
    {
        parent::boot();

//        static::addGlobalScope(new PostCategoryScope());
    }

    public function author()
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(\App\Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(\App\Tag::class);
    }

}
