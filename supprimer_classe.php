<?php
 $link = mysqli_connect("localhost","root","");
 mysqli_select_db($link,"produit");
 $id= $_POST['id'];
if(isset($id) AND !(empty($id)))
{
	includ(" exemple.php");
	mysqli_query("DELETE FROM `person` WHERE ID='.$_POST[id].'");
}
?>