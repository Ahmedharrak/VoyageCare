<?php 
 session_start();
 $idd=$_SESSION['iddep'];
	  $var4= $_SESSION['party3'];
 $sum=$_SESSION['sum'];
 $nom=$_SESSION['nom'];
 $prenom=$_SESSION['prenom'];
 ?>
 <?php
   $link = mysqli_connect("127.0.0.1","root","","voyage");
  mysqli_select_db($link,"voyage");
	?>
	<!-- ......................................................................... -->

<!DOCTYPE html>
  <html>
  <head>
      <title></title>
	   <meta charset="utf-8"/>
	    <meta http-equiv="X-UA-Comatible" content="IE=edge"/>
	    <meta name="viewport" content="width=device-width,initial-scale=1"/>
	       <link rel ="stylesheet" href="css/bootstrap.css"/>
          <link rel ="stylesheet" href="css/style33.css"/>		   
 </head>

<body>


	
	

	
	               <!-- ............................................................................... -->

	
	 <form action="http://localhost/pdfdownload/index.php" method="POST" >
<div class="container-fluid">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-body">
			 <h2>
			 	<center>INFORMATION BILLET</center>
			 </h2>
			 <br />
			 <div class="panel panel-success">
			 	<div class="panel-heading">
			 		<h3 class="panel-title"><center>DEPART</center></h3>
			 	</div>
			 	<div class="panel-body">
				      <div>
	    <img class='user' src='image/1.png' alt='logo'/>
	     </div>
			 		<strong>
			 			<i>l'entrepise:VoyageCare Transport, M/V Transport pour tous .</i></br>
					<?php	echo"<p>série:".$idd ; echo"</p>"; ?>
					</strong>
			 		<SCRIPT>
                        document.write("Date de resérvation : " + document.lastModified)
                    </SCRIPT></br>
	
			 		<?php	echo"<p>Date Depart : ".$var4  ; echo"</p>";?>
					

			 	</div>
			 </div>
			 <div class="panel panel-success">
			 	<div class="panel-heading">
			 		<h3 class="panel-title">CONTACT INFO</h3>
			 	</div>
			 
			 	<?php	

	    
           echo"<p2>Nom:".$nom ; echo"</p2>"; 
		   echo"<p3>Prenom:".$prenom ; echo"</p3>"; 
		   echo"<p1>N.Place:".$sum ; echo"</p1>"; 
		   ?>
			<div class="div"> 
 <a href="dompdf1.php">Telecharger PDF</a> </div>
 </form>
           
 
	   <!-- ......................................................................... -->
	<?php
 $res= mysqli_query($link,"SELECT * FROM `deplacement` WHERE idDeplacement= $idd ");
				 echo"<div>";
				 echo"<table  border=1>";
				 echo"<tr>";
				 echo"<th>";echo"ville Depart"; echo"</th>";
				 echo"<th>";echo"ville Arrive"; echo"</th>";
				 echo"<th>";echo"heure Depart"; echo"</th>"; 
				 echo"<th>";echo"h
				 eure Arrive"; echo"</th>";
				 echo"<th>";echo"prix"; echo"</th>";
				
				  
				 echo"</tr>";
		 while($row=mysqli_fetch_array($res))
		 {
				 echo"<tr>";
				 echo"<td>"; echo $row["villeDepart"]; echo"</td>";
				 echo"<td>"; echo $row["villeArrive"]; echo"</td>";
				 echo"<td>"; echo $row["heureDepart"]; echo"</td>";
				 echo"<td>"; echo $row["heureArrive"]; echo"</td>";
				 echo"<td>"; echo $row["prix"]; echo"</td>";
				 echo"</tr>";
		 }
		 echo"</table>";
		 echo"</div>";
	 
	 

	 
	 ?>

</body>
</html>  