<?php

class HomeController extends BaseController {

	public function index()
	{
		$video = 'nmUam9NuyEU';
		return View::make('index')->with('videoCampana', $video);
	}

}
