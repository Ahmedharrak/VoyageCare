<?php
$link = mysqli_connect("localhost","root","");
  mysqli_select_db($link,"voyage");
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8"/>
		<link rel ="stylesheet" href="css/style25.css" type="text/css"/>
	</head>
	<body>
	<form name="form1" action="" method="post">
	
	Entrer code :<input type="text" name="pass"/>
	 <button  type="submit" name="submit10" value="display">valider</button>
    </from>
	</body>
	</html>
	<?php
	

			  if(isset($_POST["submit10"])){
		 $res= mysqli_query($link,"select * from administrateur  where id='".$_POST["pass"]."'");
		 while($row=mysqli_fetch_array($res))
		 {
			 echo"<div>";
			echo"Mot passe est :";
			echo $row["motpasse"];
			echo"</div>";
		
		 }	
			  }

		 ?>
		 