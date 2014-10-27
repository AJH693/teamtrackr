<?php

/**
 * Home landing page
 */
Route::get('/', 
[
    'as' => 'landing',
    'uses' => 'HomeController@landing'
]);

/**
 * List individual project
 */
Route::get('project/{name}',
[
	'as' => 'project',
    'uses' => 'ProjectController@show'
]);


/**
 * List my projects
 */
Route::get('projects',
[
	'as' => 'myProjects',
    'uses' => 'ProjectController@myProjects'
]);

/**
 * List all projects in the system
 */
Route::get('projects/all',
[
	'as' => 'allProjects',
    'uses' => 'ProjectController@allProjects'
]);

/**
 * Admin approval page
 */
Route::get('admin',
[
	'as' => 'approval',
    'uses' => 'AdminController@approval'
]);
