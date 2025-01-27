<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'title',
        'name',
        'lastname',
        'phonenumber',
        'status',
        'text'
    ];
}
