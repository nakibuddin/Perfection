<?php
	session_start();
	require_once('dbconfig/config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>zip</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="file">
		<input type="submit" value="Archive" name="submit">
	</form>
	<?php

	    if(isset($_FILES['file']) and isset($_POST['submit'])){
	    	
			$path = "images/". $_FILES['file']['name'];
			
			//echo $path;
			$filename = $_FILES['file']['name'];
			//$filename = pathinfo($path,PATHINFO_BASENAME);
			$extension = pathinfo($path,PATHINFO_EXTENSION);
			$archiveName = basename($filename,$extension).'zip';
		    
		    $zip = new ZipArchive;
			$zip->open($archiveName,ZipArchive::CREATE);
			$zip->addFile($path,$filename);
			// move_uploaded_file(file,newloc);
			$zip->close();
		}
?>
</body>
</html>