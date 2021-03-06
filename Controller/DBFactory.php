<?php
/**
 *@ --------------------------------------------------
 *@ Singleton PDO wrapper         		     |
 *@ Developed by Sir Schiz0ide                       |
 *@ Version 1.0                                      |
 *@---------------------------------------------------
**/

namespace Application;

class database
{
	protected static $_instance = null;
	
	private function __construct() {}
	private function __clone() {}

	public static function getInstance()
	{
		
		if(self::$_instance === null)
		{
			try {
			self::$_instance = new \PDO('mysql:host=' . \Config\handler::Read("DB_HOST") . ';dbname=' . \Config\handler::Read("DB_NAME"), \Config\handler::Read("DB_USER"), \Config\handler::Read("DB_PASS")); 
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
