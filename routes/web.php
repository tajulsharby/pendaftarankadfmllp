<?php

use App\Application;
use App\Bank;
use App\Campaign;
use App\Category;
use App\Organization;
use App\Idtype;
use App\Subcategory;


Route::get('/', function () {
	
	return redirect('kadakreditasifmllp/pendaftaran');
});

Route::get('/campaigns', 'CampaignsController@index');

Route::get('/kadakreditasifmllp/pendaftaran', function () {

	$campaigns = Campaign::ActiveCampaign()->get();

	$categories = Category::ActiveCategory()->get();

	$organizations = Organization::ActiveOrganization()->get();

	$idtypes = Idtype::ActiveIdtype()->get();

	$banks = Bank::ActiveBank()->get();
    
    return view('kadakreditasifmllp.registrations.registration', compact('campaigns', 'categories', 'organizations', 'idtypes', 'banks'));

});

Route::get('/kadakreditasifmllp/preview/{id}', 'ApplicationsController@preview');

Route::get('/kadakreditasifmllp/submission', function () {

	return view('kadakreditasifmllp.registrations.submission');

});

Route::get('/kadakreditasifmllp/subcategories/{category_id}', function ($id) {

	$subcategories = Subcategory::subcategoryList($id)->get();

	return Response::json($subcategories);
});


Route::get('/applications/{application}', function ($id) {
	
	$application = DB::table('applications')->find($id);

	return $application;
});

Route::post('/applications', 'ApplicationsController@store');

Route::patch('/applications/{id}', 'ApplicationsController@update');

Route::delete('/applications/{id}', 'ApplicationsController@destroy');

/* 
Applications


/applications

GET /applications/create

GET /applications/{id}/edit

GET /applications/{id}

PATCH /applications/{id}

DELETE /applications/{id}

*/


