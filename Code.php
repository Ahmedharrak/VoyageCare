	<?php
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"voyage");
?>	
         <!-- ......................................................................... -->	
<?php 
session_start();
$var1=$_SESSION['Place'];
$_SESSION['nom']=$_POST['nom'];
$_SESSION['prenom']=$_POST['prenom'];
 $idD = $_SESSION['idDeplacement'];
  $date=$_SESSION['party1'];
 $heure= $_SESSION['heureDepart'];
 $party1=$_SESSION['party1'];
 $party2=$_SESSION['party2'];
 $party3=$_SESSION['party3'];
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
		   <link rel ="stylesheet" href="css/style29.css"/>
		   
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
            <li> <a href="Dates et tarifs.html">Dates et tarifs</a> </li>
            <li> <a href="réserver un billet.php">réserver un billet</a></li>
		    <li> <a href="notre entreprise.html">   notre entreprise   </a></li>
		
		</ul> 
    </nav> 
	       <!-- ............................................................................... -->
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
								<h3 class="panel-title">3. Informations Client 
								<span class="glyphicon glyphicon-saved" aria-hidden="true"></span>
								</h3>
							</div>
							<div class="panel-body">
								Information Client
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-warning">
							<div class="panel-heading">
								<h3 class="panel-title">4. Billets</h3>
							</div>
							<div class="panel-body">
								Billets
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	               <!-- ............................................................................... -->
	              
				   				
				   				   <form action="billet.php" method="POST" >
								   <div class="code">
								   <p >Vous avez envoye le code  dans le numero suivant . Si vous avez specifie  un numero de lingne fixe,
								   le SMS est converti un message vocal et lu a haute voix pendant la recuperation</p>
								   Code de confirmation par SMS : <br/>
								   <input type="text" name= "" required /><br/>
								   Aucun SMS Recu? <a class="vld" href="valider.php">Envoyer un nouveau code</a><br/>
                                   <input type="submit" name=""	value="Valider" />							   
								   </div>
								  
                                   </form>
								  

                              <!-- ............................................................................... -->

		<?php
		
	  $rest=mysqli_query($link,"SELECT MAX(Nbplace) AS NB FROM `client` WHERE $idD=client.idDeplacement");
		$row=mysqli_fetch_assoc($rest);
		$sum=$row['NB']+$var1;
		?>
		    <!--         ............................................................. -->
<?php
	     if(isset($_POST["Reserver"])){
	
		  mysqli_query($link,"INSERT INTO `client`( `Nom`, `Prenom`, `idDeplacement`, `Numero`, `Gmail`, `Gsm`, `Nbplace`,`date`,`heure`,`numeroCarte`) VALUES ('$_POST[nom]','$_POST[prenom]','$idD','$_POST[CIN]','$_POST[mail]','$_POST[tel]','$sum','$date','$heure','$_POST[cartebancaire]')");
			  }
	
	 
	 ?>
				         <!-- ............................................................................... -->
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