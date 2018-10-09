<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class BlogTag extends Model
{

    public function posts()
    {

        return $this->belongsToMany('App\Models\BlogPost');
    }

    //
    public function getTop($count = 5)
    {

        // $res = $this->with([
        // 'posts'
        // ])->orderBy(function ($tag)
        // {
        // Log("\n----------------------------------------------------------------------------------");
        // // $postCount = $tag->posts->count();
        // return 1;
        // })->take($count)->get();
        return $this->orderBy('post_count', 'desc')->take($count)->get();
    }
}
