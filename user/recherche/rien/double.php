<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
</head>
<body>

<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="text" name="search2">

<input type="submit" name="submit">
	
</form>

</body>
</html>

<?php

$con = new PDO ('mysql:host=127.0.0.1;port=3308;dbname=espace_membre', 'root', '');

if (isset($_POST["submit"])) {
    $str = $_POST["search"];
    $str2 = $_POST["search2"];

	$sth = $con->prepare("SELECT nom , architecte FROM `clients` WHERE nom = '$str' ");
    $sth2 = $con->prepare("SELECT nom , architecte FROM `clients` WHERE nom = '$str2' ");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth -> execute();
    $sth2->setFetchMode(PDO:: FETCH_OBJ);
	$sth2 -> execute();

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
if($row = $sth2->fetch())
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

		
		
