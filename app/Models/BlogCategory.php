<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class BlogCategory extends Model {

    //
    public function getTop($count = 5) {

        return $this->orderBy('post_count', 'desc')->take($count)->get();
    }
}
