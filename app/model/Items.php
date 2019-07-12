<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
	protected $table = 'items';
    protected $fillable = ['title','price','dimension','artist','period','description','category','frame','medium','typeofImg','material','weight','activate','recyclebin','image'];

}
