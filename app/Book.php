<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'content',
        'author_id',
        'created_at',
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

}
