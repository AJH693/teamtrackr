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
 * Show login form
 */
Route::get('login',
[
    'as' => 'showLogin',
    'uses' => 'HomeController@showLogin'
]);

/**
 * Show register form
 */
Route::get('register',
[
    'as' => 'showRegister',
    'uses' => 'HomeController@showRegister'
]);

/**
 * Login into teamtrackr
 */
Route::post('login',
[
    'as' => 'login',
    'uses' => 'HomeController@login'
]);

/**
 * Register for teamtrackr
 */
Route::post('register',
[
    'as' => 'register',
    'uses' => 'HomeController@register'
]);

/**
 * Logout of teamtrackr
 */
Route::get('logout',
[
    'as' => 'logout',
    'uses' => 'HomeController@logout'
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
	'as' => 'admin',
    'uses' => 'AdminController@approval'
]);

Route::get('accepted', function () {
    mail("cavanaughmsean@gmail.com", "Project Trackr", "Your pending changes were accepted!");
});

Route::get('declined', function () {
    mail("cavanaughmsean@gmail.com", "Project Trackr", "Your pending changes were declined!");
});