<?php
/**
 *@ --------------------------------------------------
 *@ Singleton PDO wrapper         					 |
 *@ Developed by Sir Schiz0ide / MrAsylum            |
 *@ Version 1.0                                      |
 *@---------------------------------------------------
**/

class DBFactoryChild
{
	private static $dbh;
	
	//example: $Variable->prepareQuery('SELECT * FROM whatever WHERE something = ?', array($anothervar), 'select');
	public function prepareQuery($SQL, $Params = null, $type)
	{
		try
		{
			switch(strtolower($type))
			{
			case 'select' :
			self::$dbh = DBFactory::getInstance();
			$stmt = self::$dbh->prepare($SQL);
			$stmt->execute($Params);
			$Result = $stmt->fetch(PDO::FETCH_ASSOC);
			return $Result;
			break;
			
			case 'update' :
			self::$dbh = DBFactory::getInstance();
			$stmt = self::$dbh->prepare($SQL);
			$stmt->execute($Params);
			break;
			
			case 'insert' :
			self::$dbh = DBFactory::getInstance();
			$stmt = self::$dbh->prepare($SQL);
			$stmt->execute($Params);
			break;
			
			case 'delete' :
			self::$dbh = DBFactory::getInstance();
			$stmt = self::$dbh->prepare($SQL);
			$stmt->execute($Params);
			break;
			
			case 'check' :
			self::$dbh = DBFactory::getInstance();
			$stmt = self::$dbh->prepare($SQL);
			$stmt->execute($Params);
			$final = $stmt->fetchColumn();
			if($final) 
			{ 
				return true; 
			} 
				else 
			{ 
				return false; 
			}
			break;
			}
		}
		catch(PDOException $error)
		{
			return $error->getMessage();
		}
	}



}
?>
