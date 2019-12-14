<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Item extends Model
{
    protected $fillable = ['id','item_id','quantity','subtotal'];
    public function sale()
    {
        return $this->belongsTo(Order::class);
    }

    public function item()
    {
        // return $this->belongsTo(Item::class);
        return $this->belongsTo('App\Item','item_id','id');
    }}
