<?php

$titre=$_POST["titre"];
$annee=$_POST["annee"];
$module=$_POST["module"];
$type=$POST["type"];
$resumer=$_POST["resumer"];
$lien=$_POST["lien"];

$conn=mysqli_connect('localhost','root','','siteweb');
mysqli_query($conn,'INSERT into support(nom,annee,module,type,resumer,lien) value("'.$titre.'","'.$annee.'","'.$module.'","'.$tyoe.'","'.$resumer.'","'.$lien.'") ');

header("location: ../documents.php");

?>