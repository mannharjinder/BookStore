<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = ['address', 'email', 'name', 'phoneNumber'];
}
