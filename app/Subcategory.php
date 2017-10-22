<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public function scopeSubcategoryList($query, $id) {

    	return $query->where('category_id', '=', $id);
 
    }
}
