<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artist extends Model
{
    use SoftDeletes;

    public $primaryKey = 'id';

    public function movies()
    {
        return $this->belongsToMany('App\Movie');
    }
}
