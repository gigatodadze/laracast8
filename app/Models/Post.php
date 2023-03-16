<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title','excerpt','body','category_id','slug'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //public function getRouteKeyName()
    //{
    //    return 'slug';
    //}
}
