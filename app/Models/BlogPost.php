<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class BlogPost extends Model
{

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function author()
    {
        return $this->belongsTo('App\User');
    }
}
