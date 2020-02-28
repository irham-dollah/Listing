<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    //Table name
    protected $table="listings";
    //primary key
    public $primaryKey='id';
    //key type
    protected $keyType='float';
    //Timestamps
    public $timestamps=true;

    public function user()
    {
        return $this->belongsTo('App\User','submitter_id','id');
    }

}
