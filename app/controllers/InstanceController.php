<?php

class instanceController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$json_instances = instance::all();
		$instances = json_decode($json_instances,true);
		return View::make('instances')->with('instances', $instances);
	}

	public function byAccount()
	{
		return View::make('instances.accounts');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('instances.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$instance = new Instance;
		$instance->id = Input::get('id');
		$instance->name = Input::get('name');
		$instance->save();

		return Redirect::route('instances.index');
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
		$instance = Instance::findOrFail($id);
		return View::make('instances.edit', compact('instance'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$instance = Instance::findOrFail($id);
		$instance->fill(Input::all());
		$instance->save();

		return Redirect::route('instances.index');
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


}
