<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','title','excerpt','body','category_id','slug'];

    protected $with =['category','author'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }

    //public function getRouteKeyName()
    //{
    //    return 'slug';
    //}
}
