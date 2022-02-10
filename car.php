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
		<link rel ="stylesheet" href="css/style12.css" type="text/css"/>
	</head>
	
<body> 
	<header>
		<table>
		   </tr>
			 <ul>
			        <td><li> <a class="btn" href=" accueil_admin.php"><img class="u" src='image/13.png' alt=''/></a></li></td>
				    <td> <li> <a class="btn" href=" ajouter_car.php">ajouter</td><td><img class="user" src='image/10.png' alt=''/></a></li></td>
				    <td> <li> <a class="btn" href=" modifer_car.php">modifer</td><td><img class="user" src='image/11.png' alt=''/></a></li></td>
					<td><li> <a class="btn" href="afficher_car.php">afficher</td><td><img class="user" src='image/12.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" supprimer_car.php">supprimer</td><td><img class="user" src='image/20.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href="rechercher_car.php">rechercher</td><td><img class="user" src='image/21.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" deconnecter.php">deconnecter</td><td><img class="user" src='image/18.png' alt=''/></a></li></td>
			  </ul> 
			</tr>
		  </table>
		</header>
	      <p>Bienvenue dans une page bus</p>
	 
			    </body>
				</html>