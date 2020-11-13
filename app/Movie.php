<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use SoftDeletes;

    public $primaryKey = 'id';

    public function artists()
    {
        return $this->belongsToMany('App\Artist');
    }

    /**
     * Get movies that are visible(status=1) and have the rating > 5
     * @param $query
     * @return mixed
     */
    public function scopeVisibileGoodRating($query)
    {
        return $query->where('status', 1)
            ->where('rating', '>', '5');
    }
}
