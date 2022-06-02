<?php

namespace App\Models;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=[
        "cat_title",
        "cat_description",
    ];
    function book(){
        return $this->hasMany('App\Models\Book','category_id ','id');
    }
}
