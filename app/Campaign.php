<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{

    public function scopeActiveCampaign($query) {

    	return $query->where('status', '=', 'ACTIVE');
 
    }
    
}
