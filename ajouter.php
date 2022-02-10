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
			     	<td> <li> <a class="btn" href=" modifer.php">modifer</td><td><img class="user" src='image/11.png' alt=''/></a></li></td>
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
				<td>id Deplacement : <span class="it">*</span></td>
				<td><input type="text" name="t1" required ></td>
			</tr>
			<tr>
				<td>ville Depart : <span class="it">*</span></td>
				<td><input type="text" name="t2" required ></td>
			</tr>
			<tr>
				<td>ville Arrive :<span class="it">*</span></td>
				<td><input type="text" name="t3" required ></td>
			</tr>
			<tr>
				<td>heure Depart :<span class="it">*</span></td>
				<td><input type="text" name="t4" required ></td>
			</tr>
			<tr>
				<td>heure Arrive :<span class="it">*</span></td>
				<td><input type="text" name="t5" required ></td>
			</tr>
			<tr>
				<td>prix :<span class="it">*</span></td>
				<td><input type="text" name="t6" required ></td>
			</tr>

			<tr>
				<td colspan="102" align="center">
				<button type="sumbit" name="sumbit1" value="insert">ajouter</button>
					</td>
			</tr>
		</table>	
			<p>(<span class="it">*</span>)Obligatoire</p>
</form>
</body>
</html>           

	 <?php
	 
	 if(isset($_POST["sumbit1"])){
		 mysqli_query($link,'insert into deplacement values("'.$_POST['t1'].'","'.$_POST['t2'].'","'.$_POST['t3'].'","'.$_POST['t4'].'","'.$_POST['t5'].'","'.$_POST['t6'].'")');
		   echo'<script>';
		  echo'alert("les données sont ajouter!!!!!")';
		  echo'</script>';
	 }
	 
	 ?>
	 
	 
	 
	  