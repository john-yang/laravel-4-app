<?php

class OrganizationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$json_organizations = Organization::all();
		$organizations = json_decode($json_organizations,true);
		return View::make('organizations')->with('organizations', $organizations);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('organizations.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$organization = new Organization;
		$organization->id = Input::get('id');
		$organization->name = Input::get('name');
		$organization->description = Input::get('description');
		$organization->save();

		return Redirect::route('organizations.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$organization = Organization::findOrFail($id);
		return View::make('organizations.edit', compact('organization'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$organization = Organization::findOrFail($id);
		$organization->fill(Input::all());
		$organization->save();

		return Redirect::route('organizations.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function accounts($id)
	{
		$accounts = Account::where('organization_id','=',$id)->get();
		return View::make('organizations.accounts')->with('accounts',$accounts);
	}

	public function instances($id)
	{
		$instances = Instance::where('organization_id','=',$id)->get();
		return View::make('organizations.instances')->with('instances',$instances);
	}

}
