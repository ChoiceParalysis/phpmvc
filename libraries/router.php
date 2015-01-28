<?php

class Map {

	public static function get($route, $callback) {
		Sammy::process($route, $callback, 'GET');
	}

	public static function post($route, $callback) {
		Sammy::process($route, $callback, 'POST');
	}

	public static function put($route, $callback) {
		Sammy::process($route, $callback, 'PUT');
	}

	public static function delete($route, $callback) {
		Sammy::process($route, $callback, 'DELETE');
	}

	public static function ajax($route, $callback) {
		Sammy::process($route, $callback, 'XMLHttpRequest');
	}


	public static function dispatch() {
		// runs when a matching route is found
		//
		// find the controller
		//
		// find the action
		//
		// include the app_controller
		//
		// include the matching route's controller
		//
		// run before_filter function
		//
		// run matching action
		//
		// include view_file
	}

}
