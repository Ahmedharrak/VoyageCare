<?php
$link = mysqli_connect("localhost","root","");
  mysqli_select_db($link,"voyage");
?>
<!DOCTYPE html>
  <html>
	  <head>
		  <title></title>
		   <meta charset="utf-8"/>
			   <link rel ="stylesheet" href="css/style10.css"/>
			  
	  </head>
	 <body>
	     
	   <form  action='' method='post'>
	         <table>
					<tr><td> <img class="nom" src='image/9.png' alt=''/></td>
					<td> <input type="text" name= "t1" placeholder="Nom d'utilisateur" /><br/></td></tr>
					<tr><td><img class="user" src='image/8.png' alt=''/></td>
					<td><input type="password" name= "t2" placeholder="Mot de passe"/><br/></td></tr>
				    <tr><td><a class="btn" href=" restpassword.php">Récupérer le mot de passe</a></td></tr>				
					<tr><td>  <input type="submit" name="submit"/></td></tr>

			</table>		   					
			
   <?php
   if(isset($_POST['submit']))
   {
	
		$sql= mysqli_query($link,"SELECT id FROM `administrateur` WHERE nom ='".$_POST["t1"]."' and motpasse='".$_POST["t2"]."' limit 1 ");
	   $rows=mysqli_num_rows($sql);
	   if($rows==1)
		 
	   {
			$test=mysqli_fetch_assoc($sql);
			session_start();
			$_SESSION["user"] =$test["id"]; 
			header("location:accueil_admin.php");

		  
	   }
	   else
	   {
		  echo'<script>';
		  echo'alert("nom ou mot passe incorret!!!!!")';
		  echo'</script>';

		
	   }

   }
?>
	 </form>
	 </body>
</html>

