<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable=['logo','facebook','instagram','telegram','product_header','product_des'];
}
