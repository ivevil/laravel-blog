<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $primaryKey = 'id';
    
    public $timestamps = false;
    
    protected $fillable = [
        'name',
        'slug'
    ];
    
    public function menus()
    {
        return $this->belongsToMany('App\Menus', 'menus_pages', 'pages_id', 'menus_id');
    }

}