<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $primaryKey = 'idPosts';

    protected $fillable = [
        'title',
        'body',
        'featured_image'
    ];
    
    public function getImageAttribute()
    {
       return $this->featured_image;
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
    
     public function categories()
    {
        return $this->belongsTo(Categories::class, 'categoryid');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'userid');
    }
    
        public function images()
    {
        return $this->hasMany(Media::class);
    }
}
