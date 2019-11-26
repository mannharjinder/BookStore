<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['firstName', 'lastName', 'phone', 'address', 'user_id', 'status'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function orderDetail(){
        return $this->hasOne('App\OrderDetail');
    }
}
