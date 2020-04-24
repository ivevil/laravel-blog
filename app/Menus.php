<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $primaryKey = 'id';
    
    public $timestamps = false;
    
    protected $fillable = [
        'name',
        'navigation_menu',
        'footer_menu'
    ];
    
        public function pages()
    {
        return $this->belongsToMany('App\Pages', 'menus_pages', 'menus_id', 'pages_id');
    }

}