 <?php
 session_start();
 $var2=$_SESSION["party1"];
 	$var3=$_SESSION['party2'];
	  $var4= $_SESSION['party3'];
?>
<?php
 if($var2){
	 header("Location: http://localhost/projet/billet.php");
 }else
 {
		 header("Location:http://localhost/projet/billet2.php");
 }
	 