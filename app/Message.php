<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Message extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'messages';
    protected $fillable = [
        'name', 'message','price'
    ];
}
