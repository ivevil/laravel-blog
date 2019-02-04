<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $primaryKey = 'id';



public function post()
{
    return $this->belongsTo(Posts::class);
}

}
