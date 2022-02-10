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
		<link rel ="stylesheet" href="css/style19.css" type="text/css"/>
	</head>
	<header>
	 <table class="table">
		   </tr>
			 <ul>
			 		<td><li> <a class="btn" href=" personnel.php"><img class="u" src='image/13.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" supprimer_person.php">supprimer</td><td><img class="user" src='image/20.png' alt=''/></a></li></td>
                    <td> <li> <a class="btn" href=" ajouter_person.php">ajouter</td><td><img class="user" src='image/10.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" modifer_person.php">modifer</td><td><img class="user" src='image/11.png' alt=''/></a></li></td>
	                <td><li> <a class="btn" href="afficher_person.php">afficher</td><td><img class="user" src='image/12.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" deconnecter.php">deconnecter</td><td><img class="user" src='image/18.png' alt=''/></a></li></td>
			  </ul> 
			</tr>
		  </table>
    </header>
	
<body> 
	<form name="form1" action="" method="post">
		<table> 
			<tr>
				<td class="code">Entrer Numéro d'employé : <span class="it">*</span> </td>
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
	   if(isset($_POST["sumbit5"])){
		 $res= mysqli_query($link,"select * from personnel  where numero='".$_POST["t1"]."'");
		 while($row=mysqli_fetch_array($res))
		 {		 echo"<tr>";
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
