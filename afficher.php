<?php
          $con = mysqli_connect("localhost", "root", "", "siteweb");
          $sql = "SELECT * FROM actualite ";
          $result = mysqli_query($con, $sql);
          while($row = mysqli_fetch_assoc($result)){
              echo $row["contenu"] ;
?>
