<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    public function type()
    {
        return $this->belongsToMany('App\Type');
    }
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    public function order_detail()
    {
        return $this->hasOne('App\Order_detail');
    }
    public function favorite()
    {
        return $this->hasMany('App\Favorite');
    }
    public function review()
    {
        return $this->hasMany('App\Review');
    }
    public function like()
    {
        return $this->hasMany('App\Like');
    }
}
