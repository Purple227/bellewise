<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    
    public function orders()
    {
        return $this->belongsToMany('App\Order')->withTimestamps();
    }

}
