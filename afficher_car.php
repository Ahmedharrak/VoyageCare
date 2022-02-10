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
		
		<link rel ="stylesheet" href="css/style20.css" type="text/css"/>
	</head>
<body> 
 	<header>
	 <table class="table">
		   </tr>
			 <ul>
					<td><li> <a class="btn" href=" conducteur.php"><img class="u" src='image/13.png' alt=''/></a></li></td>
					 <td> <li> <a class="btn" href=" ajouter_car.php">ajouter</td><td><img class="user" src='image/10.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" modifer_car.php">modifer</td><td><img class="user" src='image/11.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" supprimer_car.php">supprimer</td><td><img class="user" src='image/20.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href="rechercher_car.php">rechercher</td><td><img class="user" src='image/21.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" deconnecter.php">deconnecter</td><td><img class="user" src='image/18.png' alt=''/></a></li></td>
			  </ul> 
			</tr>
		  </table>
</header>
<p> Affichage table de car </p>
<?php
	 
		 $res= mysqli_query($link,"SELECT idDeplacement,car.idCar,conducteur.numero,type  FROM `car`,`conducteur` WHERE  car.idCar=conducteur.idCar ");
				 echo"<div>";
				 echo"<table  border=1>";
				 echo"<tr>";
				 echo"<th>";echo"Numero de car"; echo"</th>";
				 echo"<th>";echo"id Deplacement"; echo"</th>";
				 echo"<th>";echo"type"; echo"</th>";
				
				
				  
				 echo"</tr>";
		 while($row=mysqli_fetch_array($res))
		 {
				 echo"<tr>";
				 echo"<td>"; echo $row["idCar"]; echo"</td>";
				 echo"<td>"; echo $row["idDeplacement"]; echo"</td>";
				 echo"<td>"; echo $row["type"]; echo"</td>";
			    // echo"<td><a href=insert2.php?id=".$row['idCar'].">supprimer</a></td>";
				 echo"</tr>";
		 }
		 echo"</table>";
		 echo"</div>";
	 
	 

	 
	 ?>





</body>
</html>           


	 
	 