<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    	protected $table = 'logs';
        protected $fillable = ['description'];
}
