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
		<link rel ="stylesheet" href="css/style22.css" type="text/css"/>
	</head>
	<header>
	<table class="table">
	 	 <ul>
		            <td><li> <a class="btn" href=" car.php"><img class="u" src='image/13.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" supprimer_car.php">supprimer</td><td><img class="user" src='image/20.png' alt=''/></a></li></td>
	                <td> <li> <a class="btn" href=" ajouter_car.php">ajouter</td><td><img class="user" src='image/10.png' alt=''/></a></li></td>
					<td><li> <a class="btn" href="afficher_car.php">afficher</td><td><img class="user" src='image/12.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" modifer_car.php">modifer</td><td><img class="user" src='image/11.png' alt=''/></a></li></td>
				    <td> <li> <a class="btn" href="rechercher_car.php">rechercher</td><td><img class="user" src='image/21.png' alt=''/></a></li></td> 
					<td> <li> <a class="btn" href=" deconnecter.php">deconnecter</td><td><img class="user" src='image/18.png' alt=''/></a></li></td>
			  </ul> 
			</tr>
		  </table>
    </header>	
<body> 
	<form name="form1" action="" method="post">
		<table> 
			<tr>
				<td>numero de car: <span class="it">*</span> </td>
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
		 echo"<th>";echo"numero de car"; echo"</th>";
		 echo"<th>";echo"id deplacement"; echo"</th>";
	     echo"<th>";echo"type"; echo"</th>";
         echo"<th>";echo"numero de conducteur"; echo"</th>"; 
		 echo"</tr>";
	  if(isset($_POST["sumbit5"])){
		 $res= mysqli_query($link,"select * from car  where idCar='".$_POST["t1"]."'");
		 while($row=mysqli_fetch_array($res))
		 {
			 echo"<tr>";
			 echo"<td>"; echo $row["idCar"]; echo"</td>";
			 echo"<td>"; echo $row["idDeplacement"]; echo"</td>";
			 echo"<td>"; echo $row["type"]; echo"</td>";
			 echo"<td>"; echo $row["numero"]; echo"</td>";
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
