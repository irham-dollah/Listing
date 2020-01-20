<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //Table name
    protected $table="items";
    //primary key
    public $primaryKey='id';
    //key type
    protected $keyType='float';
    //Timestamps
    public $timestamps=true;
}
