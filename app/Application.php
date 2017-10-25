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

    public function scopeApplicationPreview($query, $id) {

        $rs = $query->join('categories', 'applications.category_id', '=', 'categories.id')
            ->join('subcategories', 'applications.subcategory_id', '=', 'subcategories.id')
            ->join('idtypes', 'applications.id_type', '=', 'idtypes.id')
            ->join('organizations', 'applications.organization_id', '=', 'organizations.id')
            ->join('banks', 'applications.bank_id', '=', 'banks.id')
            ->join('campaigns', 'applications.campaign_id', '=', 'campaigns.id')
            ->select('applications.id as id', 
                'applications.name as name', 
                'applications.id_number as id_number', 
                'applications.email as email', 
                'applications.phone_number as phone_number', 
                'applications.account_number as account_number', 
                'applications.jersey_number as jersey_number', 
                'applications.photo_src as photo_src', 
                'campaigns.name as campaign', 
                'categories.name as category', 
                'subcategories.name as sub_category',
                'idtypes.name as id_type', 
                'organizations.name as organization', 
                'banks.name as bank',  
                'subcategories.name as sub_category')
            ->where('applications.id', '=', $id)
            ->get();

        return $rs;

        //return $query->where('id', '=', $id);
 
    }

}