<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'comment_author',
        'comment_author',
        'comment_email',
        'comment_content',
        'comment_status',
        'comment_date',
    ];
}
