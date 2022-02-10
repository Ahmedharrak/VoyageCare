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
		   
		      <!-- ......................................................................... -->
	 <script>
		     
			function choixPersonne(chaine){
			var a = document.getElementById("allersimple");
			var b = document.getElementById("allerretour");

			if (chaine == 'cacher1'){
				// Contraction du code commenté ci dessous
				a.style.display = "block";
				b.style.display = "none";
				/*var a = document.getElementById("chauffeur").style.display="block";
				var b = document.getElementById("sous_traitant").style.display="none";*/
			}
			else if (chaine == 'cacher2'){
				// Contraction du code commenté ci dessous
				a.style.display = "none";
				b.style.display = "block"; 
				/*var a = document.getElementById("chauffeur").style.display="none";
				var b = document.getElementById("sous_traitant").style.display="block";*/ }
			}
</script>
		   
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
								<span class="glyphicon glyphicon-saved" aria-hidden="true"></span>
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
								<h3 class="panel-title">2. Dates</h3>
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
								<h3 class="panel-title">4. Billet</h3>
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
	<div class="col-md-1"></div>
</div>
	 
	               <!-- ............................................................................... -->
	               
	
	
	
	
	<form action='Dates.php' method='POST' > 
	<div class="form">
	   <input type="radio" name="Aller" value="allers" id="AllerS" onchange="choixPersonne('cacher1')" > <label class="AllerS" > Aller Simple </label>
	   <input type="radio" name="Aller" value="allerr" id="allerR" onchange="choixPersonne('cacher2')" > <label class="AllerR" >Aller+Retour</label><br/><br/>
	   <label> A partir de : </label>
	   <select name="t1">
	    	  <option>Tétouan</option>
					  <option>Tanger</option>
					  <option>Casablanca</option>
					  <option>Rabat</option>
					  <option>Agadir</option>
					  <option>Fés</option>
					  <option>Ouezzane</option>
					  <option>Meknés</option>
					  <option>Oujda</option> 
					  <option>Marrakech</option> 
					  <option>Tata</option>  
					  <option>Laayoune</option> 
					  <option>Larache</option>
	   </select >
	   <label> A : </label>
	   <select name="t2">
	     	  <option>Tétouan</option>
					  <option>Tanger</option>
					  <option>Casablanca</option>
					  <option>Rabat</option>
					  <option>Agadir</option>
					  <option>Fés</option>
					  <option>Ouezzane</option>
					  <option>Meknés</option>
					  <option>Oujda</option> 
					  <option>Marrakech</option> 
					  <option>Tata</option>  
					  <option>Laayoune</option> 
					  <option>Larache</option>
	   </select><br />
	   

	  <div id="allersimple" style="display:none">
	   <label for="depart">Depart</label> 
	 	<?php echo "<input type='date'name='party1' min='".date('Y-m-d')."'/>"; ?> <br/>
	   </div>
       <div id="allerretour" style="display:none">
	   <label for="depart">Depart</label> 
	  	<?php echo "<input type='date'name='party2' min='".date('Y-m-d')."'/>"; ?> <br/>
	   <label>retour</label>
	<?php echo "<input type='date'name='party3' min='".date('Y-m-d')."'/>"; ?> <br/>
	   </div> 
	   <select class="Place" name="Place" >
	   <option value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
	   </select>
	   <div class="Max" > *Maximum 4 places/achat </div>
	   <input type="submit"  name="submit1" value="rechercher" />
	   </div>	
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

	 
	 
	 
	 
	 
	