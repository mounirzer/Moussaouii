<?php

$titre = $_POST["titre"];
$contenu = $_POST["contenu"];
$date = $_POST["date"];

$directory = "../../../imageact/";
$file =  $directory.basename($_FILES["file"]["name"]);
$pathparts = pathinfo($file);
$ext =  $pathparts["extension"];

if(($ext == "jpg") || ($ext == "png") || ($ext == "jpeg") ) {
	
	

  move_uploaded_file($_FILES["file"]["tmp_name"], $file);
  echo $file;
//echo "<script>document.location='modactualite.php'</script>";
$conn = mysqli_connect("localhost","root","","siteweb");
mysqli_query($conn,'INSERT INTO actuallite(titre,date,contenu,LienImage) VALUES ("'.$titre.'","'.$date.'","'.$contenu.'","'.$file.'")');

header("location: ../actualites.php");
}else{
  echo "Your file is not supported";
  
}
?>


