       <!-- ......................................................................... -->
  <?php
         session_start();
        $_SESSION['Place']=$_POST["Place"];
		$_SESSION['party1']=$_POST["party1"];
		$_SESSION['t1']=$_POST["t1"];
		$_SESSION['t2']=$_POST["t2"];
		$_SESSION['party2']=$_POST["party2"];
	   $_SESSION['party3']=$_POST["party3"];
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
	       <link rel ="stylesheet" href="css/style4.css"/>
	       <link rel ="stylesheet" href="css/style1.css"/>
		   <link rel ="stylesheet" href="css/style27.css"/>
	
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
	 <!-- .................................................................................. -->       

<div class="container-fluid">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h3 class="panel-title">Reservation en ligne</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">1. Reservation
								</h3>
							</div>
							<div class="panel-body">
								Reservation
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">2. Dates
								<span class="glyphicon glyphicon-saved" aria-hidden="true"></span>
								</h3>
							</div>
							<div class="panel-body">
								Dates et Tarifs
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-success">
							<div class="panel-heading">
								<h3 class="panel-title">3. Information Client</h3>
							</div>
							<div class="panel-body">
								Information Client
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-warning">
							<div class="panel-heading">
								<h3 class="panel-title">4. Billet </h3>
							</div>
							<div class="panel-body">
								Billet Totalement
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
        <!--         ............................................................. -->
  <?php
            $link = mysqli_connect("127.0.0.1","root","","voyage");
            mysqli_select_db($link,"voyage");
            if($_POST['party1'])
            {
	     echo"<div class='par'>"; echo 'Horaires voyages : du '.$_POST['party1'];echo"</div>";
            $sql="SELECT * FROM `deplacement` WHere villeDepart='".$_POST["t1"]."' and villeArrive='".$_POST["t2"]."' ";
	        $res= mysqli_query($link,$sql);
            echo"<div class='div'>";
		    echo "<table >
			<tr>
				<td>villeDepart</td>
				<td>villeArrive</td>
				<td>heureDepart</td>
				<td>heureArrive</td>
				<td>prix</td>
				<td>Action</td>
			</tr>";
		    while($row=mysqli_fetch_array($res))
		    {
			if(($row['heureDepart'] <= date('H:i'))&& ($_POST['party1']==date('Y-m-d'))) { 
            echo'<tr>';
			echo'<td>'.$row['villeDepart'].'</td>';
			echo'<td>'.$row['villeArrive'].'</td>';
			echo'<td>'.$row['heureDepart'].'</td>';
			echo'<td>'.$row['heureArrive'].'</td>';
			echo'<td>'.$row['prix'].'</td>';
			echo '<td><p>  </p></td></tr>';
			} 
			else {
				echo '<form action="sum.php" method="post" >';
				echo'<tr>';
				echo'<td>'.$row['villeDepart'].'</td>';
				echo'<td>'.$row['villeArrive'].'</td>';
				echo'<td>'.$row['heureDepart'].'</td>';
				echo'<td>'.$row['heureArrive'].'</td>';
				echo'<td>'.$row['prix'].'</td>';
				echo '<input type="hidden" value="'.$row['idDeplacement'].'" name="idDeplacement" />';
			   echo '<input type="hidden" value="'.$row['heureDepart'].'" name="heureDepart" />';
				echo '<td><input type="submit" value="Suivant" name="ok" class="ok"/></td>';
				echo '</tr>';
				echo '</form>';
			}}
            echo "</table>"; echo"</div>";
		     mysqli_free_result ($res);}
		    elseif( ($_POST['party2']) && ($_POST['party3']) ){
	     	     echo"<div class='par'>"; echo 'Horaires voyages : du '.$_POST['party2'];echo"</div>";
            $sql="SELECT * FROM `deplacement` WHere villeDepart='".$_POST["t1"]."' and villeArrive='".$_POST["t2"]."' ";
	        $res= mysqli_query($link,$sql);
	   
	        echo"<div class='div'>";
		    echo "<table >
			<tr>
				<td>villeDepart</td>
				<td>villeArrive</td>
				<td>heureDepart</td>
				<td>heureArrive</td>
				<td>prix</td>
				<td>Action</td>
			</tr>";
		    while($row=mysqli_fetch_array($res))
		 {
			if(($row['heureDepart'] <= date('H:i'))&& ($_POST['party2']==date('Y-m-d'))) { 
            echo'<tr>';
			echo'<td>'.$row['villeDepart'].'</td>';
			echo'<td>'.$row['villeArrive'].'</td>';
			echo'<td>'.$row['heureDepart'].'</td>';
			echo'<td>'.$row['heureArrive'].'</td>';
			echo'<td>'.$row['prix'].'</td>';
			echo '<td><p>  </p></td></tr>';
			} 
			else {
				echo '<form action="date1.php" method="post" >';
				echo'<tr>';
				echo'<td>'.$row['villeDepart'].'</td>';
				echo'<td>'.$row['villeArrive'].'</td>';
				echo'<td>'.$row['heureDepart'].'</td>';
				echo'<td>'.$row['heureArrive'].'</td>';
				echo'<td>'.$row['prix'].'</td>';
			    echo '<input type="hidden" value="'.$row['idDeplacement'].'" name="iddeplacement" />';
			   echo '<input type="hidden" value="'.$row['heureDepart'].'" name="heure" />';
				echo '<td><input type="submit" value="Suivant" name="ok" class="ok"/></td>';
				echo '</tr>';
				echo '</form>';
			}}
        echo "</table>"; echo"</div>";
		mysqli_free_result ($res);}
        
        mysqli_close ($link); 
		
	?>
                  <!-- ........................................................................... -->
				  	<?php
			$link = mysqli_connect("127.0.0.1","root","","voyage");
            mysqli_select_db($link,"voyage");
	  $dd=date('Y-m-d');
	$hure= date('H:i');
		mysqli_query($link,"DELETE FROM `client`  WHERE date<='$dd' AND heure<='$hure'");
		mysqli_query($link,"DELETE FROM `reservation` WHERE date<='$dd' AND heure<='$hure'");
		?>
		
		<!-- ........................................................................... -->
		<footer class="foot">
		<article class="art">
			<ul>
				<li> <a href="accueil.html"> accueil </a></li>
				<li> <a href="Dates et tarifs.html">Dates et tarifs</a> </li>
				<li> <a href="réserver un billet.html">réserver un billet</a></li>
				<li> <a href="notre entreprise.html">   notre entreprise   </a></li>
			</ul>
		</article>
		<article class="art">
			<ul>	 
				<li><a href="Mot du président.html" title=" ">Mot du président</a></li>
				<li><a href="Nous connaitre.html" title=" ">Nous connaitre </a>
				<li><a href="Histoire Entreprese.html" title="">Histoire Entreprese</a></li>
				<li><a href="Métiers.html" title=" ">Métiers</a></li>
				<li><a href="Politique Qualité.html" title=" ">Politique Qualité</a></li>
				<li><a href="Gouvernance.html"  title="">Gouvernance</a></li>
			</ul>
		</article>	
		<article class="art">
			<ul >
				<li class="cont1"><a href="https://www.facebook.com" title="" class="facebook" >  <img id='facebook' src='image/facebook.png' alt=''/> facebook</a></li>
				<li class="cont1"><a href="https://www.twitter.com" title="" class="twitter"> <img id=' display: inline-block;' src='image/twitter.png' alt=''/> twitter</a></li>
				<li class="cont2"><a href="https://www.instagrame.com" title="" class="instagrame"> <img id='instagrame' src='image/instagrame.png' alt=''/> instagrame</a></li>
				<li class="cont2"><a href="https://www.youtube.com" title="" class="youtube"></a> <img id='youtoube' src='image/youtube.png' alt=''/> youtube</li>
			</ul> 
		</article>	
			 
		<article class="art">
			<p>contacter nous</p>
			TELEPHONE : 0676113436</br>
		    FIX       :0512301584</br>
			GMAIL     :voyagrcar@gmail.com</br>
			ADRESS    :Mhannech -Tetouan -Maroc
		</article>	
	</footer>
	
  </body>
</html>
