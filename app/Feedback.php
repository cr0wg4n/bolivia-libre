<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Feedback extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'feedbacks';
    public $rules = [
        'captcha' => 'required|captcha',
        'name' => 'max:100',
        'email' => 'max:100',
        'subject' => 'max:100',
        'message' => 'max:1000',
    ];
    protected $fillable = [
        'name', 'email','subject','message'
    ];
}
