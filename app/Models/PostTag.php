<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    use SoftDeletes;

    protected $table='post_tags';
    protected $fillable = [        
        'post_id',
        'tag_id',
    ];

   

}

