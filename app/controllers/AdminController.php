<?php

class AdminController extends BaseController {

	public function __construct()
	{
		$this->beforeFilter('auth');
	}

	public function approval()
	{
		return View::make('admin.approval');
	}

}