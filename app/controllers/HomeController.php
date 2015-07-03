<?php

class HomeController extends BaseController {
	
	private $_video = 'D9lXtYgD21s';

	public function index()
	{
		return View::make('index')->with('videoCampana', $this->_video)->with('calendario', '0');
	}
	public function calendario()
	{
		return View::make('index')->with('videoCampana', $this->_video)->with('calendario', '1');
	}

}
