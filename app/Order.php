<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function item()
    {
        return $this->belongsTo('App\Item','item_id','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','pic_id','id');
    }
}
