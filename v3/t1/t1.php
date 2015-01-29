<?php
require_once('../../yhteiset/funktiot.php');
require_once('../../yhteiset/dbYhteys.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tehtävä 1</title>
</head>

<body>
<pre>
<?php
// TODO: tee sql lause joka hakee kaiken 'ip_pages' taulusta
$selQuery = "SELECT * FROM ip_pages";


$STH = $DBH->query($selQuery);

$STH->setFetchMode(PDO::FETCH_ASSOC);

/* fetch yksi rivi 
$rowTest = $STH->fetch();
print_r($rowTest);
*/

// fetch kaikki rivit 
while($rowTest = $STH->fetch())
print_r($rowTest);




/*
while($row = $STH->fetch()) {

	echo $row['ID']. "\n";
	echo $row['site_id']. "\n";
	echo $row['image_id']. "\n";
	echo $row['title']. "\n";

	echo $row['content']. "\n";
	echo $row['date']. "\n";
	echo $row['frontpage']. "\n";

}
*/ 
// TODO: kutsu PDO-luokan query-metodia ja anna sille parametriksi em. sql lause (PDO-olion nimi on $DBH, se tehdään dbYhteys.php:ssä)

// TODO: query-metodi palauttaa statement-objektin. Määritä setFetchMode-metodilla haun tuloksen tyypiksi assosiatiivinen taulukko

// TODO: tulosta haun tulos print_r-funktiolla
?>
</pre>
</body>
</html>
