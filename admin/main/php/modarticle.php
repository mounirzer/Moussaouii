<?php

$id=$_GET["id"];

$titre=$_POST["titre"];
$annee=$_POST["annee"];
$module=$_POST["module"];
$resumer=$_POST["resumer"];
$lien=$_POST["lien"];

$conn=mysqli_connect('localhost','root','','siteweb');
mysqli_query($conn,"UPDATE support set nom='$titre' ,annee='$annee',module='$module',resumer='$resumer',lien='$lien' WHERE id=".$id);

header("location: ../articles.php");

?>