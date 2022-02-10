<?php 
 session_start();
  $sum=$_SESSION['sum'];
 $nom=$_SESSION['nom'];
 $prenom=$_SESSION['prenom'];
 $var2=$_SESSION["party1"];;
 $idD = $_SESSION['idDeplacement'];
 ?>
  <?php
   $link = mysqli_connect("127.0.0.1","root","","voyage");
  mysqli_select_db($link,"voyage");
	?>
<?php ob_start();?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<style>body{font-size: 16px;color: black;}</style>
<title>Title</title>
</head>
			 	

	    
		 
<?php
	            
	
                       
			 			echo"l'entrepise:VoyageCare Transport, M/V Transport pour tous .";
						echo"<p>série:".$idD ; echo"</p>"; 
			 			echo"<p>Date Depart : ".$var2  ; echo"</p>";
					
             echo"<p2>Nom:".$nom ;  
		   echo"<p3>--------------Prenom:".$prenom ; 
		   echo"<p1>--------------N.Place:".$sum ; 
		   
 $res= mysqli_query($link,"SELECT * FROM `deplacement` WHERE idDeplacement=$idD ");
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

<?php
$html = ob_get_clean();
// include autoloader

require_once 'dompdf/autoload.inc.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream();
//$pdf_gen = $dompdf->output();

?>