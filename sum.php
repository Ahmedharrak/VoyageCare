     <?php
	session_start();
	$var= $_SESSION['Place'];
	$_SESSION['idDeplacement'] = $_POST["idDeplacement"];
	$_SESSION['heureDepart'] = $_POST["heureDepart"];
	$_SESSION['ok']=$_POST['ok'];
	 $idD = $_SESSION['idDeplacement'];

	?>
	     <!-- ......................................................................... -->
	<?php
    $link = mysqli_connect("localhost","root","");
    mysqli_select_db($link,"voyage");

	  
	   	$rest=mysqli_query($link,"SELECT MAX(Nbplace) AS NB FROM `client` WHERE $idD=client.idDeplacement");
		$row=mysqli_fetch_assoc($rest);
	     if(($sum=$row['NB']+$var)>50  ){
			 echo'<script>';
		  echo'alert("Il n y a pas de emplacement vacants dans ce bus!!!!!")';
		  echo'</script>'; 
		  echo'<a href="réserver un billet.php"> réserver un billet </a>';
		 }
		 else{
			 header("Location: http://localhost/projet/client.php");
			
		 }
		 	$_SESSION['sum']=$sum;
	    ?>
		