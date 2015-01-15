<?php
// TODO: liitä funktiot.php ( yhteiset kansiossa, require_once() )
require_once('../../yhteiset/funktiot.php');


// TODO: uudelleenohjaa selain takaisin tähän tiedostoon siten että osoite alkaa https.... (ks. funktiot.php)
// SSLon is defined in funktiot.php
SSLon();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Teht 1</title>

</head>

<body>
<?php


if( empty($_POST['teksti']) ):
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="teksti">
        <input type="submit" value="lähetä">
    </form>
<?php
else:

	
	$teksti = $_POST['teksti'];
    echo "Original Text: $teksti <br>";
	// todo: hae lähetetty teksti $_post[]:in avulla
	// TODO: tulosta teksti
 	$suola = 'lkasdfasdfasdfasdf';

	// TODO: tiivistä teksti MD5 algoritmilla ( hash() -funktio )
	$mdfiveTeksti = hash('md5',$teksti);

	// TODO: tulosta MD5 tiivistetty teksti
	echo "MDF tekst: $mdfiveTeksti <br>";

	// TODO: tiivistä teksti sha256 algoritmilla ( hash() -funktio )
	$SHATeksti = hash('sha256',$teksti);
	echo "SHA256 tekst: $SHATeksti <br>";
	// TODO: tulosta SHA256 tiivistetty teksti

	// shaa256 + salting 
	$SHATeksti = hash('sha256',$teksti.$suola);
	echo "SHA256 tekst salted: $SHATeksti <br>";
endif;
?>
</body>
</html>