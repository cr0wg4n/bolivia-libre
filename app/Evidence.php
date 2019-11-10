<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Evidence extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'evidences';
    public $rules = [
        'captcha' => 'required|captcha',
        'name' => 'max:100',
        'email' => 'max:100',
        'content' => 'required|max:10000',
    ];
    protected $fillable = [
        'name', 'email','content'
    ];
}
