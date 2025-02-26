<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    public function type()
    {
        return $this->belongsTo('App\Type', 'type_id', 'id');
    }
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    public function order_detail()
    {
        return $this->hasOne('App\Order_detail');
    }
    public function favorites()
    {
        return $this->hasMany('App\Favorite');
    }
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
    public function likes()
    {
        return $this->hasMany('App\Like');
    }
}
