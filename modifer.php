<?php
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"voyage");
session_start();
if(!isset($_SESSION['user']))
{
header ('Location:admin.php');
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8"/>
		<link rel ="stylesheet" href="css/style13.css" type="text/css"/>
	</head>
	
<body> 
	<header>
		<table>
		   </tr>
			 <ul>
			        <td><li> <a class="btn" href=" deplacement.php"><img class="u" src='image/13.png' alt=''/></a></li></td>
			        <td> <li> <a class="btn" href=" ajouter.php">ajouter</td><td><img class="user" src='image/10.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" supprimer.php">supprimer</td><td><img class="user" src='image/20.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href="rechercher.php">rechercher</td><td><img class="user" src='image/21.png' alt=''/></a></li></td>
					<td><li> <a class="btn" href="afficher.php">afficher</td><td><img class="user" src='image/12.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" deconnecter.php">deconnecter</td><td><img class="user" src='image/18.png' alt=''/></a></li></td>
			  </ul> 
			</tr>
		  </table>
		</header>
	<form name="form1" action="" method="post">
		<table> 
			<tr>
				<td> Entrer id Deplacement : <span class="it">*</span> </td>
				<td><input type="text" name="t1" required ></td>
			</tr>
			<tr>
				<td>ville Depart :</td>
				<td><input type="text" name="t2"></td>
			</tr>
			<tr>
				<td>ville Arrive :</td>
				<td><input type="text" name="t3"></td>
			</tr>
			<tr>
				<td>heure Depart :</td>
				<td><input type="text" name="t4"></td>
			</tr>
			<tr>
				<td>heure Arrive :</td>
				<td><input type="text" name="t5"></td>
			</tr>
			<tr>
				<td>prix :</td>
				<td><input type="text" name="t6"></td>
			</tr>

			<tr>
				<td colspan="102" align="center">
				<button type="sumbit" name="sumbit3" value="update">modifer</button>
					</td>
			</tr>
		</table>	
			    
			 <p>(<span class="it">*</span>)Obligatoire</p>
</form>
</body>
</html>           

	 <?php
	 
	
	 	 if(isset($_POST["sumbit3"])){
		 
			 if($_POST["t2"]!="")
			 { 
			 mysqli_query($link,"UPDATE `deplacement` SET `villeDepart`='".$_POST["t2"]."' where idDeplacement=".$_POST["t1"]);
			 }
			if($_POST["t3"]!="")
			 { 
			 mysqli_query($link,"UPDATE `deplacement` SET `villeArrive`='".$_POST["t3"]."' where idDeplacement=".$_POST["t1"]);
			 }
			 if($_POST["t4"]!="")
			 { 
			 mysqli_query($link,"UPDATE `deplacement` SET `heureDepart`='".$_POST["t4"]."' where idDeplacement=".$_POST["t1"]);
			 }
			 if($_POST["t5"]!="")
			 { 
			 mysqli_query($link,"UPDATE `deplacement` SET `heureArrive`='".$_POST["t5"]."' where idDeplacement=".$_POST["t1"]);
			 }	
			 
			 if($_POST["t6"]!="")
			 { 
			 mysqli_query($link,"UPDATE `deplacement` SET `prix`='".$_POST["t6"]."' where idDeplacement=".$_POST["t1"]);
			 }
			 echo'<script>';
						 echo'alert("les données sont modifer!!!!!")';
						 echo'</script>';
	 }
	 
	 
	  
	 
	 
	 ?>
	 
	 
	 
	  