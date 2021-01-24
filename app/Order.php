<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    /**
     * The roles that belong to the user.
    */
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }


}
