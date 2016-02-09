<?php

class UsersController extends BaseController {
	protected $layout = "layouts.default";

public function getLogin() {
	$this->layout->content = View::make('users.login');
}

public function getDashboard() {
    $this->layout->content = View::make('users.dashboard');
}

public function postSignin() {
	if (Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password')))) {
	    return Redirect::to('users/dashboard')->with('message', 'You are now logged in!');
	} else {
	    return Redirect::to('users/login')
	        ->with('message', 'Your username/password combination was incorrect')
	        ->withInput();
	}
}
public function getRegister() {
	$this->layout->content = View::make('users.register');
}
public function postCreate() {	
//	$validator = Validator::make(Input:;all(), User::$rules);

//	if ($validator->passes()) {
//		$user = new User;
//		$user->username = Input::get('username');
//		$user->password = Hash::make(Input::get('password'));
//		$user->save();

//		return Redirect::to('users/login')->with('message','You Logged In');
///	} else {
//		return Redirect::to('users/login')->with('message','Failed To Log In');
//	}
}
public function getLogout() {
    Auth::logout();
    return Redirect::to('users/login')->with('message', 'Your are now logged out!');
}}
?>
