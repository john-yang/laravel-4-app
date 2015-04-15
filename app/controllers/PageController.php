<?php

class PageController extends BaseController {

	public function home()
	{

		return View::make('home');

	}	

	public function search()
	{
		$json_instances = User::all();
		$arr = json_decode($json_instances,true);
		return View::make('search')->with('arr', $arr);
	}	

	public function instances()
	{
		$json_instances = Instance::all();
		$arr = json_decode($json_instances,true);
		return View::make('instances')->with('arr', $arr);
	}


}
