<?php

$db_user = 'root';
$db_pass = '';
$db_host = 'localhost';
$db_name = 'vantagep_portaldev';

$dsn = "mysql:host=$db_host;dbname=$db_name;";
$db = new PDO($dsn,$db_user,$db_pass);

//Set attributes
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//Webiste Name
define('APP_NAME','Vantage Portal');