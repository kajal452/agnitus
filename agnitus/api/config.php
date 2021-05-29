<?php
/**
 * Database configuration
 */
define('DB_USERNAME', 'ttiicsen_2tics');
define('DB_PASSWORD', '!Q2w3e4r5t');
define('DB_HOST', 'localhost');
define('DB_NAME', 'ttiicsen_dbV2');
$dsn      = "mysql:dbname=ttiicsen_dbV2; host=localhost";
$user     = 'ttiicsen_2tics';
$password = '!Q2w3e4r5t';
$options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        );

?>
