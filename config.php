
<?php 
error_reporting(0);
$DB_connection = 'mysql';
$serverName = 'localhost';
$DB_user = 'root';
$DB_password = '';
$DB_name = 'zajactest';
$DB_charset = 'utf8mb4';

$DB = new PDO($DB_connection.":host=".$serverName.";dbname=".$DB_name.";charset=".$DB_charset, $DB_user, $DB_password);

?>