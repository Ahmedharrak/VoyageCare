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
		
		<link rel ="stylesheet" href="css/style14.css" type="text/css"/>
	</head>
<body> 
 	<header>
	 <table class="table">
		   </tr>
			 <ul>
					<td><li> <a class="btn" href=" deplacement.php"><img class="u" src='image/13.png' alt=''/></a></li></td>
					 <td> <li> <a class="btn" href=" ajouter.php">ajouter</td><td><img class="user" src='image/10.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" modifer.php">modifer</td><td><img class="user" src='image/11.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" supprimer.php">supprimer</td><td><img class="user" src='image/20.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href="rechercher.php">rechercher</td><td><img class="user" src='image/21.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" deconnecter.php">deconnecter</td><td><img class="user" src='image/18.png' alt=''/></a></li></td>
			  </ul> 
			</tr>
		  </table>
</header>
<p> Affichage le table de deplacement </p>
<?php
	 
		 $res= mysqli_query($link,"SELECT deplacement.idDeplacement,car.idCar,conducteur.numero,villeDepart,villeArrive,heureDepart,heureArrive,prix  FROM `deplacement`,`car`,`conducteur` WHERE deplacement.idDeplacement=car.idDeplacement AND car.idCar=conducteur.idCar ");
				 echo"<div>";
				 echo"<table  border=1>";
				 echo"<tr>";
				 echo"<th>";echo"id Deplacement"; echo"</th>";
				 echo"<th>";echo"id Car"; echo"</th>";
				 echo"<th>";echo"numero conducteur"; echo"</th>";
				 echo"<th>";echo"ville Depart"; echo"</th>";
				 echo"<th>";echo"ville Arrive"; echo"</th>";
				 echo"<th>";echo"heure Depart"; echo"</th>"; 
				 echo"<th>";echo"heure Arrive"; echo"</th>";
				 echo"<th>";echo"prix"; echo"</th>";
				
				  
				 echo"</tr>";
		 while($row=mysqli_fetch_array($res))
		 {
				 echo"<tr>";
				 echo"<td>"; echo $row["idDeplacement"]; echo"</td>";
				 echo"<td>"; echo $row["idCar"]; echo"</td>";
				 echo"<td>"; echo $row["numero"]; echo"</td>";
				 echo"<td>"; echo $row["villeDepart"]; echo"</td>";
				 echo"<td>"; echo $row["villeArrive"]; echo"</td>";
				 echo"<td>"; echo $row["heureDepart"]; echo"</td>";
				 echo"<td>"; echo $row["heureArrive"]; echo"</td>";
				 echo"<td>"; echo $row["prix"]; echo"</td>";
				 // echo"<td><a href=insert.php?id=".$row['idDeplacement'].">supprimer</a></td>";
				 echo"</tr>";
		 }
		 echo"</table>";
		 echo"</div>";
	 
	 

	 
	 ?>





</body>
</html>           


	 
	 