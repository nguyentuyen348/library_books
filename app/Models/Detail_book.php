<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_book extends Model
{
    use HasFactory;
    function books(){
        return $this->belongsTo(Book::class,'id');
    }
}
