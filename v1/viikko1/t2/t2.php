<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<style>
	img {
		max-width: 100%;
		height: auto;
	}
	td {
		border:solid 2px #000;
		text-align:center;
	}
</style>
</head>

<body>
<table>
<tr>
<?php
	$koodi = file_get_contents('http://www.iltasanomat.fi'); // TODO: hae file_get_contents funktiolla jonkin sivuston (vaikkapa http://www.iltasanomat.fi) lähdekoodi
//	$lauseke = '/^<img .*>/'; // TODO: tee säännöllinen lauseke, joka löytää <img> elementit
	$lauseke = '/<\s*img.[^>]*>/i'; // TODO: tee säännöllinen lauseke, joka löytää <img> elementit
	
	$osumat = array(); 
	
	// img elementit tallentuvat tähän (osumat) taulukkoon, using preg_match_all
	preg_match_all($lauseke, $koodi , $osumat);
	// print_r($osumat); // print_r:llä on hyvä tarkistaa mitä sisältöä taulukkoon tulee
	// TODO: käy foreach-silmukalla $osumat[0] läpi tulosta <img> elementit kolmepalstaiseen talukkoon
	foreach($osumat[0] as $key => $img){
			// tässä pitäisi tulostaa
			// joka kolmannen kuvan kohdalla  </tr><td>$img<td><tr>
			// muuten tulostetaan <td>$img<td>
		if(($key+1)%3 == 0){
			echo "<td>$img</td></tr><tr>";
		} else {
			echo "<td>$img</td>";

		}
	}

?>
</tr>
</table>
</body>
</html>