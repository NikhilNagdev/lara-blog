<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'category_id',
        'user_id',
        'post_title',
        'post_date_time',
        'post_image',
        'post_content',
        'post_tags',
        'post_status',
        'post_view_count',
    ];
}
