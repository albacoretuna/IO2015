<?php
require_once('../../yhteiset/funktiot.php'); // täällä on autoload, joten luokkatiedostoa ei tartte tuoda
require_once("Student.class.php"); 	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tehtävä 1</title>
</head>

<body>
<?php

// TODO tee Student luokasta olio, jossa id on oikeaa muotoa
// käytä try catchiä

// TODO tee Student luokasta olio, jossa id on väärää muotoa
// käytä try catchiä

try { 
 	$omid = new Student("omid", "1234568888887");
	$omid->printNameId();

	$mikko = new Student("Mikko", "234sd");
	$mikko->printNameId();
 } catch(Exception $e) {
 	echo 'Cauth Exception', $e->getMessage(),"\n";
 }


?>
</body>
</html>