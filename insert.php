<?php
 $link = mysqli_connect("localhost","root","");
 mysqli_select_db($link,"voyage");
 $id=$_GET['id'];
 mysqli_query($link,"DELETE FROM `deplacement` WHERE idDeplacement =$id ");


  header("Location: http://localhost/projet/afficher.php");

		  
?>