     <?php
	session_start();
	$var= $_SESSION['Place']; 
	$_SESSION['iddep']=$_POST['iddep'];
	$_SESSION['ok']=$_POST['ok'];
	$heure=$_SESSION['heure'] ;
	 $id=$_SESSION['id'];
	 $_SESSION['huer']=$_POST['huer'];
	 $idd=$_SESSION['iddep'];
	?>
	     <!-- ......................................................................... -->
	<?php
    $link = mysqli_connect("localhost","root","");
    mysqli_select_db($link,"voyage");

	  
	  	$rest=mysqli_query($link,"SELECT MAX(Nbplace) AS NB FROM `client` WHERE .$id=client.idDeplacement");
		$row=mysqli_fetch_assoc($rest);
		$re=mysqli_query($link,"SELECT MAX(place) AS NBN FROM `reservation` WHERE  $idd=idDeplacement");
         $rowss=mysqli_fetch_assoc($re);
	    if(($sum=$row['NB']+$var)>50){
			if(($zo=$rowss['NBN']+$var)>50){
			 echo'<script>';
		  echo'alert("Il n y a pas de emplacement vacants dans ce bus!!!!!")';
		 echo'</script>'; 
		 echo'<a href="réserver un billet.php"> réserver un billet </a>';
		}}
		 else{
		header("Location:http://localhost/projet/client1.php");
	//echo"soooooom".$sum;
	//echo"moooooooos".$zo;
		}

	    ?>
		