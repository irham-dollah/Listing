<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function item()
    {
        return $this->belongsTo('App\Item','item_id','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','seller_id','id');
    }

}
