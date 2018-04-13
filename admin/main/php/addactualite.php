<?php

$titre = $_POST["titre"];
$contenu = $_POST["contenu"];
$lien = $_POST["lien"];
$date = $_POST["date"];

$conn = mysqli_connect("localhost","root","","siteweb");
mysqli_query($conn,'INSERT into actuallite(titre,contenu,lien,date) value("'.$titre.'","'.$contenu.'","'.$lien.'","'.$date.'")');


header("location: ../actualites.php");

?>