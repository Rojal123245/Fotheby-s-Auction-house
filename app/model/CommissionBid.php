<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class CommissionBid extends Model
{
      	protected $table = 'commission_bids';
        protected $fillable = ['client_email','item_id'];
}
