<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'count', 'price',
    ];
    
    public function orders()
    {
        return $this->belongsToMany('App\Order')->withTimestamps();
    }

}
