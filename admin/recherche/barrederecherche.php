<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
</head>
<body>

<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
	
</form>

</body>
</html>

<?php

$con = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');
if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT nom , architecte FROM `clients` WHERE nom = '$str' ");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		
		        <p>
				<?php echo $row->nom; ?>
				<?php echo $row->architecte;?>
				<a href= "suppression_form.php"> Supprimer </a> 
                        <a href= "modification_form.php"> Modifier </a>
				<br/>		
			    </p>
 
	 <?php 
	} 
	 else {
		 echo "nom inexistant";
	 }
}
		
		
