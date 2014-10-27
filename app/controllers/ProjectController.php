<?php

class ProjectController extends BaseController {

	public function show($name) 
	{
		return View::make('project.show');
	}

	public function myProjects()
	{
		return View::make('project.my');
	}

	public function allProjects()
	{
		return View::make('project.all');
	}

}