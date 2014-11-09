<?php

class ProjectController extends BaseController {

	public function __construct()
	{
		$this->beforeFilter('auth');
	}

	public function show($name) 
	{
		$project = Project::where('name', '=', $name)->first();
		
		if($project)
		{
			return View::make('project.show', $project);
		}

		return 'not found';
	}

	public function myProjects()
	{
		return View::make('project.my');
	}

	public function allProjects()
	{
		return View::make('project.all', ['projects' => Project::all()]);
	}

}
