<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use SoftDeletes;

    protected $table='tags';
    protected $fillable = [        
        'name',
    ];

    public function posts() {
        return $this->belongsToMany(Post::class);
    }    

}
