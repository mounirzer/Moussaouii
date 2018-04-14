<?php

$conn=mysqli_connect('localhost','root','','siteweb');


//$inserer=mysql_query("INSERT INTO support VALUES('','bdd','ll','ll','hk','ko')");
$sql="SELECT * FROM support";
$resultat=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($resultat);
if($resultcheck>0){
	while($rows=mysqli_fetch_assoc($resultat)){
		echo $rows['lien'];
	}
}


?>