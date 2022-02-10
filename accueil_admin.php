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
		<link rel ="stylesheet" href="css/style11.css" type="text/css"/>
	</head>
	
<body> 
	<header>
		<table>
		   </tr>
			 <ul>
			        <td>  <li> <a class="btn" href=" modefpass.php">paramètre</td><td><img class="user" src='image/26.png' alt=''/></a></li></td>
			        <td> <li> <a class="btn" href=" conducteur.php">conducteur</td><td><img class="user" src='image/16.png' alt=''/></a></li></td>
			        <td> <li> <a class="btn" href=" car.php">bus</td><td><img class="user" src='image/17.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" personnel.php">personnel</td><td><img class="user" src='image/15.png' alt=''/></a></li></td>
				    <td> <li> <a class="btn" href=" deplacement.php">deplacement</td><td><img class="user" src='image/22.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" deconnecter.php">deconnecter</td><td><img class="user" src='image/18.png' alt=''/></a></li></td>
					
		   
			  </ul> 
			</tr>
		  </table>
		   
		
		</header>
		<p class="p">Bienvenue dans la page d'accueil</p>
		
</body>
</html>           
