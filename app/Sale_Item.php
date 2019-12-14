<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale_Item extends Model
{
    protected $fillable = ['id','item_id','quantity','subtotal'];
    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }}
