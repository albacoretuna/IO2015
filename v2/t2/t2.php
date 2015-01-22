<?php
/* address 
http://users.metropolia.fi/~seyedhe/io/v2/t2/t2.php

Features:
1. Upload a file
2. Save it on the website
3. Make a thumbnail
4. Save it somewhere
5. Show both the image and its thumb
*/
require_once('../../yhteiset/funktiot.php');
require_once('../phpClasses/Upload.class.php');
require_once('../phpClasses/easyphpthumbnail.class.php');


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Upload</title>
</head>

<body>
<?php
	if (empty($_FILES['test'])) :
?>
     
     <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
        <input type="file" name="test">
        <input type="submit" value="lataa">
    </form>   
<?php
		
	else:
		//Tehtävä 2 TODO: käytä uploads-luokkaa tallentamaan lomakkeesta lähetetty tiedosto 'uploads'-kansioon
		
		// TODO: aseta maksimi tiedostokoko
		
		// TODO: määrittele sallitut mime tyypit (image/gif jne...)

		$upload = Upload::factory('uploads');
		$upload->file($_FILES['test']);
		$upload->set_max_file_size(0.2);
   		$upload->set_allowed_mime_types(array('image/jpeg', 'image/jpg', 'image/gif', 'image/png'));




		$results = $upload->upload();
		$imgAddress = $results['full_path']; 
		//var_dump($results);
?>
<!-- TODO tulosta tallennettu kuva <img> elementillä -->
	<img src="<?php echo $results['full_path']; ?>" > 



<?php
	// Teht 3 TODO: tee easyphpthumbnail luokkalla pikkukuva aiemmin tallennetusta kuvasta
    $thumbi = new easyphpthumbnail;
    $thumbi -> Thumbsize = 300;
    $thumbi -> Thumblocation = 'thumbs/';
    $thumbi -> Thumbfilename = 'mynewfilename.png';
    $thumbi -> Createthumb($results['full_path'], file);

 ?>
<img src="<?php echo 'thumbs/mynewfilename.png'; ?>" > 
 <?php

	endif;
?>
<br>
<!-- TODO tulosta tallennettu pikkukuva <img> elementillä -->
</body>
</html>