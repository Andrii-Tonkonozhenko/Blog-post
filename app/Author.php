<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name',
        'create_at',
    ];
    public function book()
    {
        return $this->hasMany(Book::class);
    }
}
