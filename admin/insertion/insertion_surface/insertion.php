<?php
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');

$pdoStat = $objetPdo -> prepare ('INSERT INTO surface VALUES ( NULL, :identifiant_surface, :nom_surface , :unite_surface)');

$pdoStat->bindValue(':identifiant_surface', $_POST['identifiant_surface'], PDO:: PARAM_STR);
$pdoStat->bindValue(':nom_surface', $_POST['nom_surface'], PDO:: PARAM_STR);
$pdoStat->bindValue(':unite_surface', $_POST['unite_surface'], PDO:: PARAM_STR);

$executeIsOk = $pdoStat->execute();
 
if($executeIsOk){
    $message = 'la surface a été ajoutée';
}
else{
  $message = "echec de l'ajout de la surface";
}
?>

<html>
<head>
<meta charset="utf-8">

<title> document </title>

</head>
<body>
<h1> insertion des surfaces </h1>

<p> <?php echo $message; ?> </p>
  
</body>
</html>     