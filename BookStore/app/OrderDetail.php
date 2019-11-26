<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = ['book_id', 'order_id', 'quantity', 'unitPrice'];

    public function order(){
        return $this->belongsTo('App\Order');
    }

    public function books(){
        return $this->hasMany('App\book');
    }
}
