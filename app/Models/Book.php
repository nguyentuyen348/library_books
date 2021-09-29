<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    function category() {
        return $this->belongsTo(Category::class);
    }
    function author(){
        return $this->belongsTo(Author::class,'author_id');
    }
    function detail_book(){
        return $this->hasOne(Detail_book::class,'id');
    }
}
