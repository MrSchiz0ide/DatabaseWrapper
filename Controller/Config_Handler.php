<?php

class Config 
{
	public static $config = array();

	public static function Read($key)
	{
		return self::$config[$key];
	}	

	public static function Write($key, $value)
	{
		self::$config[$key] = $value;
	}
}
?>
