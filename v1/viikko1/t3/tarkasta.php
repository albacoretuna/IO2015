<?php
// TODO: liitä funktiot.php ( yhteiset kansiossa, require_once() )
require_once('../../yhteiset/funktiot.php');


// TODO: pistä https päälle (ks. funktiot.php)
SSLon();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tarkasta</title>
</head>

<body>
<?php

if( empty($_POST['email']) && empty($_POST['pwd']) ):
?>
	<form action="tarkasta.php" method="post">
        <input type="text" name="email" placeholder="sähköposti">
        <br>
        <input type="password" name="pwd" placeholder="salasana">
        <br>
        <input type="submit" value="kirjaudu" name="submit">
    </form>
<?php
else :
	// TODO: hae lähetetty email ja pwd $_POST[]:in avulla
	$posti = $_POST['email'];
	
	$lauseke1 = '/^[a-z0-9_-]+(\.[a-z0-9_-])*@[a-z0-9-]+(\.[a-z0-9-]+)*\.[a-z]{2,}$/i'; // TODO: tee säännöllinen lauseke, joka tarkastaa onko email sähköpostiosoite



	$lauseke2 = '/[A-Z]/'; // TODO: tee säännöllinen lauseke, joka tarkastaa onko pwd:ssä vähintään 1 iso kirjain
	$lauseke3 = '/[0-9]/'; // TODO: tee säännöllinen lauseke, joka tarkastaa onko pwd:ssä vähintään 1 numero
	$lauseke4 = '/.{8,}/'; // TODO: tee säännöllinen lauseke, joka tarkastaa onko pwd vähintään 8 merkkiä pitkä



	if( preg_match($lauseke2, $pwd) && preg_match($lauseke3, $pwd) && preg_match($lauseke4, $pwd) ){
		$passwd = true;
	} else {
		$passwd = false;	
	}
	


	// TODO: tee seuraavanlainen if-lause
	// jos $email ja $passwd ovat tosia
	// uudelleenohjaa tiedostoon ok.php ( redirect(), tämä löytyy funktiot.php:stä )
	// muutoin näytä lomake uudestaan (eli uudelleenohjaa takaisin tähän tiedostoon)
	if(preg_match($lauseke1, $posti)){
		$email = true;
	}
	if($email){
		redirect('ok.php');
	} else {
		redirect($_SERVER['PHP_SELF']);

	}

endif;

?>
</body>
</html>