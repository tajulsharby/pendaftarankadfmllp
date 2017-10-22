<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    public function scopeActiveBank($query) {

    	return $query->where('status', '=', 'ACTIVE');
 
    }
}
