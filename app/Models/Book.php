<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $guarded = [];

    public function volumes()
    {
        return $this->hasMany(BookVolume::class, 'book_id');
    }
}
