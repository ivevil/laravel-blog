<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Widgets extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'details',
        'type'
    ];

}
