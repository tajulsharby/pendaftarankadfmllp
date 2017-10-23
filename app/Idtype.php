<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idtype extends Model
{
    
	public function scopeActiveIdtype($query) {

    	return $query->where('status', '=', 'ACTIVE');
 
    }

}
