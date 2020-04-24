<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'description'
    ];

    public function post()
    {
        return $this->belongsTo(\App\Posts::class, 'categoryid');
    }
}
