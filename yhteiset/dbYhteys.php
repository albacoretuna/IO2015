<?php
$host = 'mysql.metropolia.fi';
$dbname = ''; // tunnus
$user = ''; // tunnus
$pass = ''; // tietokannan salasana

try {
	$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
	$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$DBH->exec("SET NAMES utf8;");
} catch(PDOException $e) {
	echo "Could not connect to database.";
	file_put_contents('../../loki/PDOErrors.txt', $e->getMessage()."\n", FILE_APPEND);
}

?>