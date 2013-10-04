<?php
/* Includes */
require_once("/Controller/DBFactory.php");
require_once("/Controller/DBHandler.php");

/* Dynamic Configuration */
Config\handler::Write('DB_HOST', 'enter host here');
Config\handler::Write('DB_NAME', 'enter database name here');
Config\handler::('DB_USER', 'enter database username here');
Config\handler::Write('DB_PASS', 'enter database password here');
?>
