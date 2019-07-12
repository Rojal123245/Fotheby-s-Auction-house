<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    	protected $table = 'clients';
        protected $fillable = ['title','firstname','surname','address','contactno','email','password','clientstatus','bankacno','sortcode','approved'];
}
