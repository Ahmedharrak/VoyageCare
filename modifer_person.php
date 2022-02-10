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
	<link rel ="stylesheet" href="css/style18.css" type="text/css"/>
	</head>
	
<body> 
	<header>
		<table>
		   </tr>
			 <ul>
			       <td><li> <a class="btn" href=" deplacement.php"><img class="u" src='image/13.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" supprimer_person.php">supprimer</td><td><img class="user" src='image/20.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href="rechercher_person.php">rechercher</td><td><img class="user" src='image/21.png' alt=''/></a></li></td>
			        <td> <li> <a class="btn" href=" ajouter_person.php">ajouter</td><td><img class="user" src='image/10.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" afficher_person.php">afficher</td><td><img class="user" src='image/12.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" deconnecter.php">deconnecter</td><td><img class="user" src='image/18.png' alt=''/></a></li></td>
			  </ul> 
			</tr>
		  </table>
		</header>
<form name="form1" action="" method="post">
	  <table> 
          <tr>
		        <td>Entrer Numero d'employe : <span class="it">*</span> </td>
			    <td><input type="text" name="t1" required ></td>
		  </tr>
		  <tr>
	            <td>nom :</td>
			    <td><input type="text" name="t2"></td>
		  </tr>
		   <tr>
	            <td>prenom :</td>
			    <td><input type="text" name="t3"></td>
		    </tr>
		    <tr>
	            <td>telephone :</td>
			    <td><input type="text" name="t4"></td>
		  </tr>
		    <tr>
	            <td>adresse :</td>
			    <td><input type="text" name="t5"></td>
		    </tr>
		     <tr>
	              <td>age:</td>
			      <td><input type="text" name="t6"></td>
		    </tr>
			    <tr>
	              <td>lieu et date de naissance:</td>
			      <td><input type="text" name="t7"></td>
		    </tr>
			      <tr>
	              <td>gmail:</td>
			      <td><input type="text" name="t8"></td>
		    </tr>
			    <tr>
	              <td>genre:</td>
			      <td><input type="text" name="t9"></td>
		
			 </tr>
			 <tr>
	              <td>nationalite:</td>
			      <td><input type="text" name="t10"></td>
		    </tr>
			    <td colspan="102" align="center">
					<button type="sumbit" name="sumbit3" value="update">modifie</button>
			    </td>
			</tr>
		</table>	
		<p>(<span class="it">*</span>)Obligatoire</p>
</form>
 <?php
	 
	
	if(isset($_POST["sumbit3"])){
		 
			 if($_POST["t2"]!="")
			 { 
			 mysqli_query($link,"UPDATE `personnel` SET `nom`='".$_POST["t2"]."' where numero =".$_POST["t1"]);
			 }
			if($_POST["t3"]!="")
			 { 
			 mysqli_query($link,"UPDATE `personnel` SET `prenom`='".$_POST["t3"]."' where numero=".$_POST["t1"]);
			 }
			 if($_POST["t4"]!="")
			 { 
			 mysqli_query($link,"UPDATE `personnel` SET `telephone`='".$_POST["t4"]."' where numero=".$_POST["t1"]);
			 }
			 if($_POST["t5"]!="")
			 { 
			 mysqli_query($link,"UPDATE `personnel` SET `adresse`='".$_POST["t5"]."' where numero=".$_POST["t1"]);
			 }	
			 
			 if($_POST["t6"]!="")
			 { 
			 mysqli_query($link,"UPDATE `personnel` SET `age`='".$_POST["t6"]."' where numero=".$_POST["t1"]);
			 }
			  if($_POST["t7"]!="")
			 { 
			 mysqli_query($link,"UPDATE `personnel` SET `lieuetdatedenaissance`='".$_POST["t7"]."' where numero=".$_POST["t1"]);
			 }
			 if($_POST["t8"]!="")
			 { 
			 mysqli_query($link,"UPDATE `personnel` SET `nationalite`='".$_POST["t8"]."' where numero=".$_POST["t1"]);
			 }	
			 
			 if($_POST["t9"]!="")
			 { 
			 mysqli_query($link,"UPDATE `personnel` SET `gmail`='".$_POST["t9"]."' where numero=".$_POST["t1"]);
			 }
			  if($_POST["t10"]!="")
			 { 
			 mysqli_query($link,"UPDATE `personnel` SET `gener``='".$_POST["t10"]."' where numero=".$_POST["t1"]);
			 }
	 }
	 
	 ?>
</body>
</html>
	