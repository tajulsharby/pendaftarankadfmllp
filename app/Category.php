<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    public function scopeActiveCategory($query) {

    	return $query->where('status', '=', 'ACTIVE');
 
    }

}
