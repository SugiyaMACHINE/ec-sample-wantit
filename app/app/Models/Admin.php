<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    public function admin()
    {
        return $this->belongsTo('App\Models\Admin', 'type_id', 'id');
    }
    public function income()
    {
        return $this->hasMany('App\Models\Income');
    }

    public function spending()
    {
        return $this->hasMany('App\Models\Spending');
    }

    public function type()
    {
        return $this->hasMany('App\Models\Type');
    }
}
