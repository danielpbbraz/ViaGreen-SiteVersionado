<?php

class Input {
	public static function get($key, $default = FALSE){
		return isset($_GET[$key]) ? $_GET[$key] : $default;
	}

	public static function post($key, $default){
		return isset($_POST[$key]) ? $_POST[$key] : $default;
	}

	public static function request($key, $default){
		return isset($_REQUEST[$key]) ? $_REQUEST[$key] : $default;
	}
}
