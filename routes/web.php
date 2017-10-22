<?php

use App\Bank;
use App\Campaign;
use App\Category;
use App\Idtype;
use App\Subcategory;


Route::get('/', function () {
	
	//$campaigns = DB::table('campaigns')->get();

	$campaigns = Campaign::ActiveCampaign()->get();

	$categories = Category::ActiveCategory()->get();

	$idtypes = Idtype::ActiveIdtype()->get();

	$banks = Bank::ActiveBank()->get();
    
    return view('application', compact('campaigns', 'categories', 'idtypes', 'banks'));
});


Route::get('/subcategories/{category_id}', function ($id) {

	$subcategories = Subcategory::subcategoryList($id)->get();

	return Response::json($subcategories);
});


Route::get('/applications/{application}', function ($id) {
	
	$application = DB::table('applications')->find($id);

	return $application;
});