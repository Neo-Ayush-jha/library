<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        "book_name",
        "category_id",
        "book_cover_images",
        "book_images",
        "about_book",
        "auther_name",
    ];
    function book() {
        return $this->belongsTo('App\Models\Category','category_id','id');
    }
}
