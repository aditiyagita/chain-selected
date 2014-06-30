<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	function __construct() {
		$this->provinsi 	= new Provinsi();
		$this->kabupaten 	= new Kabupaten();
	}

	public function showWelcome()
	{
		$data['provinsi']	= $this->provinsi->getDataProvinsi();
		return View::make('hello')
					->with('data', $data);
	}

	public function showKabupaten($value)
	{
		$data['kabupaten']	= $this->kabupaten->getDataKabupaten($value);
		return View::make('kabupaten')
					->with('data', $data);
	}

}
