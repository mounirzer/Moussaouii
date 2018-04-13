<?php

$id=$_GET["id"];

$conn=mysqli_connect('localhost','root','','siteweb');

mysqli_uery($conn,'DELETE from support WHERE id='.$id);

header("location: ../documents.php");


?>