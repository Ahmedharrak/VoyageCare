<!DOCTYPE html>
  <html>
  <head>
      <title></title>
	   <meta charset="utf-8"/>
	    <meta http-equiv="X-UA-Comatible" content="IE=edge"/>
	  <meta name="viewport" content="width=device-width,initial-scale=1"/>
	       <link rel ="stylesheet" href="css/bootstrap.css"/>
	       <link rel ="stylesheet" href="css/style4.css"/>
	       <link rel ="stylesheet" href="css/style32.css"/>
	   	   <link rel ="stylesheet" href="css/style6.css"/>
		    <link rel ="stylesheet" href="css/style7.css"/>
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
	    <p>Bonjour, Voir ici les dates des voyages disponible.</p>
	               <!-- ............................................................................... -->
		  <form  action='date_et_tarifs.php' method='post'>
		<div class="form">
		<label >a partir de : </label>
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
		     </select>
		<label>a : </label>
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
		    </select><br/>
		<?php echo "<input type='date' min='".date('Y-m-d')."'/>"; ?> <br/>
		<input type="submit" name="sumbit1"value="rechercher" />
		</div>
		<form>
		
				         <!-- ............................................................................... -->
	<footer class="foot">
		<article class="art">
			<ul>
				<li> <a href="accueil.html"> accueil </a></li>
				<li> <a href="Dates et tarifs.html">Dates et tarifs</a> </li>
				<li> <a href="réserver un billet.php">réserver un billet</a></li>
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

