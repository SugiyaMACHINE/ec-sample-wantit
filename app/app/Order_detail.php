<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{

    public function item()
    {
        return $this->hasOne('App\Item');
    }
    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
