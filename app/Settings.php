<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'website_name',
        'website_logo'
    ];

}
