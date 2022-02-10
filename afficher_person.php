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
		
		<link rel ="stylesheet" href="css/style17.css" type="text/css"/>
	</head>
	<header>
	   <table class="table">
		   </tr>
			 <ul>
			 		<td><li> <a class="btn" href=" deplacement.php"><img class="u" src='image/13.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" supprimer_person.php">supprimer</td><td><img class="user" src='image/20.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href="rechercher_person.php">rechercher</td><td><img class="user" src='image/21.png' alt=''/></a></li></td>
			        <td> <li> <a class="btn" href=" ajouter_person.php">ajouter</td><td><img class="user" src='image/10.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" modifer_person.php">modifer</td><td><img class="user" src='image/11.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" deconnecter.php">deconnecter</td><td><img class="user" src='image/18.png' alt=''/></a></li></td>
			
			  </ul> 
			</tr>
		  </table>
</header>
<body> 
<p> Affichage de la table du personnel  </p> 
<?php
 
	    $res= mysqli_query($link,"select * from personnel ");
		             echo"<div>";
					 echo"<table border=1>";
					 echo"<tr>";
					 echo"<th>";echo"numero d'employé"; echo"</th>";
					 echo"<th>";echo"nom"; echo"</th>";
					 echo"<th>";echo"prenom"; echo"</th>";
					 echo"<th>";echo"telephone"; echo"</th>"; 
					 echo"<th>";echo"adresse"; echo"</th>";
					 echo"<th>";echo"age"; echo"</th>";
					 echo"<th>";echo"lieu et date de naissance"; echo"</th>";
					 echo"<th>";echo"nationalite"; echo"</th>";
					 echo"<th>";echo"gmail"; echo"</th>";
					 echo"<th>";echo"gener"; echo"</th>";	 	
					 echo"</tr>";
		 while($row=mysqli_fetch_array($res))
		 {
					 echo"<tr>";
					 echo"<td>"; echo $row["numero"]; echo"</td>";
					 echo"<td>"; echo $row["nom"]; echo"</td>";
					 echo"<td>"; echo $row["prenom"]; echo"</td>";
					 echo"<td>"; echo $row["telephone"]; echo"</td>";
					 echo"<td>"; echo $row["adresse"]; echo"</td>";
					 echo"<td>"; echo $row["age"]; echo"</td>";
					 echo"<td>"; echo $row["lieuetdatedenaissance"]; echo"</td>";
					 echo"<td>"; echo $row["nationalite"]; echo"</td>";
					 echo"<td>"; echo $row["gmail"]; echo"</td>";
					 echo"<td>"; echo $row["gener"]; echo"</td>";
					// echo"<td><a href=insert1.php?id=".$row['numero'].">supprimer</a></td>";
					 echo"</tr>";
		 }
					 echo"</table>";
					 echo"</div>";
	 ?>
</body>
</html>           


	 
	 