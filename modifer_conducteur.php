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
		<link rel ="stylesheet" href="css/style23.css" type="text/css"/>
	</head>
	
<body> 
	<header>
		<table class="table">
		   </tr>
			 <ul>
			        <td><li> <a class="btn" href=" accueil_admin.php"><img class="u" src='image/13.png' alt=''/></a></li></td>
					<td><li> <a class="btn" href="afficher_conducteur.php">afficher</td><td><img class="user" src='image/12.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" ajouter_conducteur.php">ajouter</td><td><img class="user" src='image/10.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" supprimer_conducteur.php">supprimer</td><td><img class="user" src='image/20.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href="rechercher_conducteur.php">rechercher</td><td><img class="user" src='image/21.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" deconnecter.php">deconnecter</td><td><img class="user" src='image/18.png' alt=''/></a></li></td>
			  </ul> 
			</tr>
		  </table>
		</header>
		<form name="form1" action="" method="post">
		<table> 
			<tr>
			<tr>
				<td>numero de conducteur : <span class="it">*</span> </td>
				<td><input type="text" name="t1"></td>
			</tr>
				<td> numero de car : </td>
				<td><input type="text" name="t2" required ></td>
			</tr>
			<tr>
				<td colspan="102" align="center">
			    <button type="sumbit" name="sumbit2" value="modifer">modifer</button>
					</td>
			</tr>
		</table>	
		 <p>(<span class="it">*</span>)Obligatoire</p> 
		</form>
	 <?php
	 

		
	  	 if(isset($_POST["sumbit2"])){
		 
			 if($_POST["t2"]!="")
			 { 
			 mysqli_query($link,"UPDATE `conducteur` SET `idCar`='".$_POST["t2"]."' where numero=".$_POST["t1"]);
			 }
	 }
	 
	 ?>
	 
	 
			    </body>
				</html>