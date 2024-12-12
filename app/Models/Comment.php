<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use SoftDeletes;

    protected $table='comments';
    protected $fillable = [        
        'content',
        'post_id'
    ];

    public function post() {
        return $this->belongsTo(Post::class);
    }

}
