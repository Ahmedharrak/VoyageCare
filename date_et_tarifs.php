 <!DOCTYPE html>
  <html>
  <head>
      <title></title>
	   <meta charset="utf-8"/>
	    <meta http-equiv="X-UA-Comatible" content="IE=edge"/>
	  <meta name="viewport" content="width=device-width,initial-scale=1"/>
	       <link rel ="stylesheet" href="css/bootstrap.css"/>
	       <link rel ="stylesheet" href="css/style4.css"/>
	   	   <link rel ="stylesheet" href="css/style6.css"/>
		      <link rel ="stylesheet" href="css/style24.css"/>
 </head>
<body>
                         <!-- ......................................................................... -->
     <header>
	 
	      <ul class="contact">
		        <li>  <a href="https://www.facebook.com" title=""  ><img  src='image/facebook.png' alt=''/></a></li>
		        <li> <a href="https://www.twitter.com" title="" > <img src='image/twitter.png' alt=''/></a></li>
		        <li><a href="https://www.instagrame.com" title="" > <img src='image/instagrame.png' alt=''/></a></li>
		        <li> <a href="https://www.youtube.com" title=""></a> <img  src='image/youtube.png' alt=''/></li>
	      </ul>    
        <button id= rech ></button>
        <input type = "texte" placeholder=" RECHERCHE" id="tex"/>
        <select name="longue" id ="lon">
        <option value="francais">francais</option>
        <option value="العربية">العربية</option>
        <option value="anglais">anglais</option>
        </select>

  </header>
                        <!-- ......................................................................... -->
      <div class="cont">
	    <img id='im' src='image/1.png' alt='logo'/>
	  </div>
    <nav class="na">
        <ul>
            <li> <a href="accueil.html"> accueil </a></li>
            <li> <a href="Dates et tarifs.php">Dates et tarifs</a> </li>
            <li> <a href="réserver un billet.php">réserver un billet</a></li>
		    <li> <a href="notre entreprise.html">   notre entreprise   </a></li>
		
		</ul> 
    </nav> 
		<p> Bonjour ,voir la liste des voyages disponibles.</p>
<?php
$link = mysqli_connect("localhost","root","");
  mysqli_select_db($link,"voyage");
  if(isset($_POST["t1"])&& isset($_POST["t2"])){
	   $res= mysqli_query($link,"SELECT * FROM `deplacement` WHere villeDepart='".$_POST["t1"]."' and villeArrive='".$_POST["t2"]."' ");
	   echo"<div class='div'>";
	   
		echo "<table>
			<tr>
				<td>ville Depart</td>
				<td>ville Arrive</td>
				<td>heure Depart</td>
				<td>heure Arrive</td>
				<td>prix</td>
			</tr>";
		while($row=mysqli_fetch_array($res))
		{
			echo"<tr><td>".$row["villeDepart"]."</td>";
			echo"<td>".$row["villeArrive"]."</td>";
			echo"<td>".$row["heureDepart"]."</td>";
			echo"<td>".$row["heureArrive"]."</td>";
			echo"<td>".$row["prix"]."</td></tr>";
		}
		echo "</table>";
	  echo"</div>";
  }
?>
</body>
<html>