<?php 

$id = $_GET["id"];

$conn = mysqli_connect('localhost','root','','siteweb');


mysqli_query($conn,'DELETE FROM actuallite WHERE id='.$id);


header("location: ../actualites.php");


?>