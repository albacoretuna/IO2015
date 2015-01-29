<?php
require_once('../../yhteiset/funktiot.php');
require_once('../../yhteiset/dbYhteys.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tehtävä 2</title>
</head>

<body>
<?php
if( !empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['date'])):
	$title = $_POST['title'];
	$content = $_POST['content'];
	$date = $_POST['date'];

	$data = array('title'=>$title,'content'=>$content, 'date'=>$date); 
	//$data

	// tähän talukkoon tallennetaan data lomakkeesta
	// TODO: hae taulukon kentät ja tallenna ne $data-taulukkoon

	try {
		// käytä PDO luokan prepare ja PDOStatement luokan execute metodeja lisäämään lomakkeesta tullut data 'ip_pages' tauluun. Kovakoodaa site_id ja image_id kenttien arvoiksi '1'
	$STH = $DBH->prepare("INSERT INTO ip_pages (site_id,title,image_id,content, date) values ('1', :title, '1', :content, :date)");
	$STH->execute($data);


		echo 'Lisäys onnistui';
	} catch(PDOException $e) {
		echo "Lisäys ei onnistunut.";
		// TODO: tulosta mahdollinen virheilmoitus tekstitiedostoon (nimi esim: PDOErrors.txt)
			file_put_contents('../../loki/PDOErrors.txt', $e->getMessage()."\n", FILE_APPEND);

	}
	
else :
?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<input type="text" name="title" placeholder="Sivun nimi">
    <br>
    Sivun sisältö:
    <br>
    <textarea name="content">Tänne HTMLää</textarea>
    <br>
    <input type="date" name="date" placeholder="yyyy-mm-dd">
    <br>
    <input type="submit" value="Tallenna">    
</form>
<?php
endif;
?>

</body>
</html>