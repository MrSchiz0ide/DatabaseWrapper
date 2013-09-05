<?php
/**
 *@ --------------------------------------------------
 *@ Singleton PDO wrapper         					 |
 *@ Developed by Sir Schiz0ide                       |
 *@ Version 1.0                                      |
 *@---------------------------------------------------
**/

class DBFactoryChild
{
	public static $dbh;
	
	public static function Prepared_Query($SQL, $Params)
	{
		try
		{
			self::$dbh = DBFactory::getInstance();
			$Swag = self::$dbh->prepare($SQL);
			$Swag->execute($Params);
			$Result = $Swag->fetch(PDO::FETCH_ASSOC);
			return $Result;
		}
		catch(PDOException $error)
		{
			return $error->getMessage();
		}
	}
	
	public static function Prepared_Query_With_Row_Count($SQL, $Params)
	{
		//This should only be used for checking a login or anything similar to that
		try
		{
			self::$dbh = DBFactory::getInstance();
			$Execution = self::$dbh->prepare($SQL);
			$Execution->execute($Params);
			$Result = $Execution->fetchColumn();
		
			if($Result > 0)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		catch(PDOException $error)
		{
			return $error->getMessage();
		}
	}	
	
	public static function Exploit_Evasion($Data)
	{
		return htmlspecialchars($Data);
	}

	

}
