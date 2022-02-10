
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
		    <link rel ="stylesheet" href="css/style26.css" type="text/css"/>
   </head>
   
   
   	<header>
		<table>
		   </tr>
			 <ul>
			        
			        <td><li> <a class="btn" href=" accueil_admin.php"><img class="u" src='image/13.png' alt=''/></a></li></td>
					<td> <li> <a class="btn" href=" deconnecter.php">deconnecter</td><td><img class="user" src='image/18.png' alt=''/></a></li></td>
					
			  </ul> 
			</tr>
		  </table>
		</header>
 <body>
 <p> Modifer mot de passe </p>
		  <form action="" method="POST">
				     		 Ancien mot passe:<input  type="password" name="mot"/></br></br></br>
						        Nouveau mot passe:<input  type="password" name="motpass"/></br></br></br>
							      Confirmer mot passe:<input  type="password" name="pass"/></br></br></br>
							 <input  type="submit" name="submit" value="modifer"/>
		</form>
      </body>
</html>
<?php
 if(isset($_POST['submit']))
{
	if($_POST["motpass"]==$_POST["pass"])
			 { 
			    mysqli_query($link,"UPDATE `administrateur` SET `motpasse` ='".$_POST["motpass"]."' WHERE `administrateur`.`motpasse`=".$_POST["mot"]);
			    echo"<script>alert('est modefer')</script>";
		   
			 }
}

?>
