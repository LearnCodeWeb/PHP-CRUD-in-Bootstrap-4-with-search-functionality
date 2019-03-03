<?php
include_once('../../assets/Database.php');

define('DB_NAME', 'test');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$dsn	= 	"mysql:dbname=".DB_NAME.";host=".DB_HOST."";
$pdo	=	"";
try {
	$pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
}catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
$db 	=	new Database($pdo);
?>