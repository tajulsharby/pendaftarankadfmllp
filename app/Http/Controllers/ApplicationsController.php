<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Application;

class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('applications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $application = new Application;

        $photo_src = $this->photoUpload($request);

        Application::create([
            'campaign_id' => request('campaign_id'),
            'name' => request('name'),
            'id_type' => request('id_type'),
            'id_number' => request('id_number'),
            'jersey_number' => request('jersey_number'),
            'category_id' => request('category_id'),
            'subcategory_id' => request('subcategory_id'),
            'organization_id' => request('organization_id'),
            'email' => request('email'),
            'phone_number' => request('phone_number'),
            'photo_src' => $photo_src,
            'bank_id' => request('bank_id'),
            'account_number' => request('account_number')
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function photoUpload(Request $request)
    {

        request()->validate([

            'photo_src' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $photo_name = time() . '.' . request()->photo_src->getClientOriginalExtension();

        $photo_src = public_path('images') . '/' . $photo_name;

        request()->photo_src->move(public_path('images'), $photo_name);

        return $photo_src;

    }
}
