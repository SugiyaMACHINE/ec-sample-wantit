<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function sender()
    {
        return $this->belongsTo('App\Sender');
    }
    public function order_detail()
    {
        return $this->hasMany('App\Order_detail');
    }
}
