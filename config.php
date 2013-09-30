<?php
/* Includes */
require_once("/Controller/DBFactory.php");
require_once("/Controller/DBHandler.php");

/* Dynamic Configuration */
Config::Write('DB_HOST', 'enter host here');
Config::Write('DB_NAME', 'enter database name here');
Config::Write('DB_USER', 'enter database username here');
Config::Write('DB_PASS', 'enter database password here');
?>
