<?php
	session_start();
	$user = $_POST["username"];
	$password = $_POST["pass"];
	$conn = mysqli_connect("localhost", "root", "", "siteweb");
	if($conn){
	//$sql = ;
	$resul = mysqli_query($conn, " SELECT * FROM admin WHERE username='$user' AND mdp = '$password' ");
  $result = mysqli_num_rows($resul);
	if($result > 0){
		  echo"welcome";
  }else {
	    echo "you are not admin";
    }
$usernm=$_SESSION ['username'];
}
	header("location: ../index.html");
?>
