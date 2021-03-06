<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $primaryKey = 'id';
    
    public $timestamps = false;
    
    protected $fillable = [
        'title',
        'alt',
        'url'
    ];
    

}