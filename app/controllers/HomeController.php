<?php

class HomeController extends BaseController {

	public function __construct()
	{
		$this->beforeFilter('guest', ['except' => 'logout']);
	}

	public function landing()
	{
		return View::make('landing');
	}

	public function showLogin()
	{
		return View::make('login');
	}

	public function showRegister()
	{
		return View::make('register');
	}

	public function login()
	{
		if(Auth::attempt(['email' => Input::get('email', null), 'password' => Input::get('password', null)]))
        {
            return Redirect::route('allProjects');
        }
        else
        {
            return Redirect::route('showLogin')->with('error', 'Invalid credentials');
        }
	}

	public function email()
	{
		print "Email";
		mail("daotoo@iastate.edu", "Test", "Test");
	}

	public function register()
	{
		$user = new User(Input::all());

        if($user->save())
        {
            return Redirect::route('showLogin')->with('message', 'Successful register');
        }
        else
        {
            return Redirect::route('showRegister')->with('error', 'Register failed');
        }
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::route('landing');
	}

}
