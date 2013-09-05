<?php
/**
 *@ --------------------------------------------------
 *@ Singleton PDO wrapper         					 |
 *@ Developed by Sir Schiz0ide                       |
 *@ Version 1.0                                      |
 *@---------------------------------------------------
**/

class DBFactory
{
	protected static $_instance = null;
	
	private function __construct() {}
	private function __clone() {}

	public static function Get_Instance()
	{
		
		if(self::$_instance === null)
		{
			try {
			self::$_instance = new PDO("mysql:host=localhost;dbname=database_wrapper", "root", ""); 
			}
			catch(PDOException $error)
			{
				return $error->getMessage();
			}
		}
		return self::$_instance; 
	}
}
?>
