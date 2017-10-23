<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    public function scopeActiveOrganization($query) {

    	return $query->where('status', '=', 'ACTIVE');
 
    }
}
