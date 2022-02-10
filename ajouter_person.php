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
		   	       <td><li> <a class="btn" href=" personnel.php"><img class="u" src='image/13.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" modifer_person.php">modifer</td><td><img class="user" src='image/11.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" supprimer_person.php">supprimer</td><td><img class="user" src='image/20.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href="rechercher_person.php">rechercher</td><td><img class="user" src='image/21.png' alt=''/></a></li></td>
					<td><li> <a class="btn" href="afficher_person.php">afficher</td><td><img class="user" src='image/12.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" deconnecter.php">deconnecter</td><td><img class="user" src='image/18.png' alt=''/></a></li></td>
			  </ul> 
			</tr>
		  </table>
		</header>
<form name="form1" action="" method="post">
	  <table> 
          <tr>
		        <td>Numero d'employe :  <span class="it">*</span></td>
			    <td><input type="text" name="t1" required ></td>
		  </tr>
		  <tr>
	            <td>nom : <span class="it">*</span></td>
			    <td><input type="text" name="t2" required ></td>
		  </tr>
		   <tr>
	            <td>prenom : <span class="it">*</span></td>
			    <td><input type="text" name="t3" required ></td>
		    </tr>
		    <tr>
	            <td>telephone :</td>
			    <td><input type="text" name="t4"></td>
		  </tr>
		    <tr>
	            <td>adresse : <span class="it">*</span></td>
			    <td><input type="text" name="t5" required ></td>
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
	              <td>gmail: <span class="it">*</span></td>
			      <td><input type="text" name="t8" required ></td>
		    </tr>
			    <tr>
	              <td>genre:</td>
			      <td><input type="text" name="t9"></td>
		
			 </tr>
			 <tr>
	              <td>nationalite:</td>
			      <td><input type="text" name="t10"></td>
		    </tr>
		    <tr>
			    <td colspan="102" align="center">
			        <button type="sumbit" name="sumbit1" value="insert">ajouter</button>
			    </td>
			</tr>
		</table>
          <p>(<span class="it">*</span>)Obligatoire</p>		
</form>
 <?php
	 
	if(isset($_POST["sumbit1"])){
		   mysqli_query($link,"insert into personnel values('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]','$_POST[t6]','$_POST[t7]','$_POST[t8]','$_POST[t9]','$_POST[t10]')");
	 }
	?>