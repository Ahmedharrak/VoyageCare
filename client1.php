<?php
session_start();
$car=$_SESSION['ok'];
;
?>

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
		   <link rel ="stylesheet" href="css/style8.css"/>
		   <link rel ="stylesheet" href="css/style28.css"/>
		   
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

	               <form action="Code1.php" method="post" >
				   <section>
				   <h1>Reservation en ligne</h1><br/><br />		   
				   <h2>Information de paiement</h2>
				   <div class="info" >
				  <span class="it">*</span> Nom : <input type="text" name="nom"  placeholder="votre Nom " required /> 
				  <span class="it">*</span>Prenom :<input type="text" name="prenom" value='' placeholder="votre Prenom " required />  <br/><br/>
				  <span class="it">*</span> Pièce d'identité : <select><option>CIN</option><option>Passport</option></select> <span class="it">*</span>Numero <sup> 1 </sup>: <input type="text" name="CIN" value='' placeholder="votre CIN" required />  <br/><br/>
				  <span class="it">*</span> Email : <sup> 2 </sup><input type="email" name="mail" value='' placeholder="votre email " required />
				  <span class="it">*</span> GSM : <sup> 3 </sup><input type="tel" name="tel" value='' placeholder="votre Numero  "required /><br /><br/>
				   				   <span class="it">*</span> Numero de carte bancaire : <sup> 4 </sup><input type="text" name="cartebancaire" value='' placeholder="votre Numero de carte  "required /><br /><br/>
				   <sup> 1 </sup> pour vérifier l'identité du résponsable de réservation lors de l'embarquement.</sup><br/>
				   <sup> 2 </sup> pour recevoir votre billet imprimable. <br />
				   <sup> 3 </sup> pour vous envoyer par SMS le code d'achat. <br />
				   <span class="iv">(*) Champs obligatoires</span>
				   </div>                  
				   	   <input type = "submit"  name="Reserver" value = "Reserver">
					   </section>
					   </form>
				   

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
