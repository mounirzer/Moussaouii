<?php

$titre=$_POST["titre"];
$annee=$_POST["annee"];
$module=$_POST["module"];
$type=$_POST["type"];
$resumer=$_POST["resumer"];
$lien=$_POST["lien"];

$conn=mysqli_connect('localhost','root','','siteweb');
mysqli_query($conn,'INSERT INTO support(nom,annee,resumer,type,lien,module) VALUES ("'.$titre.'","'.$annee.'","'.$resumer.'","'.$type.'","'.$lien.'","'.$module.'") ');
header("location: ../documents.php");

?>
