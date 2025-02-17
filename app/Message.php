<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Message extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'messages';
    public $rules = [
        'captcha' => 'required|captcha',
        'name' => 'max:100',
        'message' => 'max:500'
    ];
    protected $fillable = [
        'name', 'message'
    ];
}
