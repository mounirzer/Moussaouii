<?php

$titre = $_POST["titre"];
$contenu = $_POST["contenu"];
$lien = $_POST["lien"];
$date = $_POST["date"];

$conn = mysqli_connect("localhost","root","","siteweb");
mysqli_query($conn,'INSERT INTO actuallite(titre,date,contenu,lien) VALUES ("'.$titre.'","'.$date.'","'.$contenu.'","'.$lien.'")');

header("location: ../actualites.php");

?>
