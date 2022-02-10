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
		<link rel ="stylesheet" href="css/style15.css" type="text/css"/>
	</head>
	<header>
	<table class="table">
	 	 <ul>
			 	    <td><li> <a class="btn" href=" deplacement.php"><img class="u" src='image/13.png' alt=''/></a></li></td>
			        <td> <li> <a class="btn" href=" ajouter.php">ajouter</td><td><img class="user" src='image/10.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" supprimer.php">supprimer</td><td><img class="user" src='image/20.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href="modifer.php">modifer</td><td><img class="user" src='image/11.png' alt=''/></a></li></td>
					<td><li> <a class="btn" href="afficher.php">afficher</td><td><img class="user" src='image/12.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" deconnecter.php">deconnecter</td><td><img class="user" src='image/18.png' alt=''/></a></li></td>
			  </ul> 
			</tr>
		  </table>
    </header>	
<body> 
	<form name="form1" action="" method="post">
		<table> 
			<tr>
				<td> Entrer id Deplacement : <span class="it">*</span> </td>
				<td><input type="text" name="t1" required ></td>
				<td colspan="102" align="center">
				      <button  type="sumbit" name="sumbit5" value="display">rechercher</button>
				</td>
			</tr>
			
			<tr >
			<td colspan=3>
			<?php
 echo"<div>";
		 echo"<table border=1>";
		 echo"<tr>";
		 echo"<th>";echo"id Deplacement"; echo"</th>";
		  echo"<th>";echo"ville Depart"; echo"</th>";
		   echo"<th>";echo"ville Arrive"; echo"</th>";
		    echo"<th>";echo"heure Depart"; echo"</th>"; 
			echo"<th>";echo"heure Arrive"; echo"</th>";
			 echo"<th>";echo"prix"; echo"</th>";
		 echo"</tr>";
	  if(isset($_POST["sumbit5"])){
		 $res= mysqli_query($link,"select * from deplacement  where idDeplacement='".$_POST["t1"]."'");
		 while($row=mysqli_fetch_array($res))
		 {
			 echo"<tr>";
			 echo"<td>"; echo $row["idDeplacement"]; echo"</td>";
			 echo"<td>"; echo $row["villeDepart"]; echo"</td>";
			 echo"<td>"; echo $row["villeArrive"]; echo"</td>";
			 echo"<td>"; echo $row["heureDepart"]; echo"</td>";
			 echo"<td>"; echo $row["heureArrive"]; echo"</td>";
			 echo"<td>"; echo $row["prix"]; echo"</td>";
			 echo"</tr>";
		 }
		 echo"</table>";
		 echo"</div>";
	 }
	 
	 
	 
	 
	 ?>
			</td>
			</tr>
		</table>	
		  <p>(<span class="it">*</span>)Obligatoire</p>
</form>
</body>
</html>           
