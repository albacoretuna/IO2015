<?php
require_once('../../yhteiset/funktiot.php');
require_once('../../yhteiset/dbYhteys.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tehtävä 3</title>
</head>

<body>
<?php
// TODO: tee sql lause joka hakee 'ip_pages' taulusta content ja date kentät sekä 'ip_images' taulusta kuhunkin sivuun kuuluvan kuvan

$selQuery = "SELECT content, date, url FROM ip_pages JOIN ip_images ON ip_pages.image_id=ip_images.ID ";
$STH = $DBH->query($selQuery);

$STH->setFetchMode(PDO::FETCH_ASSOC);

// fetch kaikki rivit 
while($row = $STH->fetch()) { 
//print_r($row['content']);

// TODO: kutsu PDO-luokan query-metodia ja anna sille parametriksi em. sql lause (PDO-olion nimi on $DBH, se tehdään dbYhteys.php:ssä)

// TODO: query-metodi palauttaa statement-objektin. Määritä setFetchMode-metodilla haun tuloksen tyypiksi assosiatiivinen taulukko tai objekti

// TODO: tulosta haun tulos seuraavankaltaisen HTML koodin joukkoon:

$timestamp = strtotime($row["date"]);



?> 
<div>
   <img src="<?php print_r($row['url']);?>">
  <p><?php print_r($row['content']);?></p>
  <p><?php print_r( date("d.m.Y ", $timestamp)); ?></p>

</div>
<?php  
}
?>

</body>
</html>