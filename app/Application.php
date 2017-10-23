<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
    	'campaign_id',
    	'name',
    	'id_type',
    	'id_number',
    	'jersey_number',
    	'organization_id',
    	'category_id',
    	'subcategory_id',
    	'email',
    	'phone_number',
    	'photo_src',
    	'bank_id',
    	'account_number'
    ];
}