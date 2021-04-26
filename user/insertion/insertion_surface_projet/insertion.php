<?php
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');

$pdoStat = $objetPdo -> prepare ('INSERT INTO surface_projet VALUES (:identifiant_projet , :identifiant_surface , :montant_surface , NULL )');


$pdoStat->bindValue(':identifiant_projet', $_POST['identifiant_projet'], PDO:: PARAM_STR);
$pdoStat->bindValue(':identifiant_surface', $_POST['identifiant_surface'], PDO:: PARAM_STR);
$pdoStat->bindValue(':montant_surface', $_POST['montant_surface'], PDO:: PARAM_STR);

$executeIsOk = $pdoStat->execute();
 
if($executeIsOk){
    $message = 'la surface projet  a été ajoutée';
}
else{
  $message = "echec de l'ajout de la surface projet";
}
?>

<html>
<head>
<meta charset="utf-8">

<title> document </title>

</head>
<body>
<h1> insertion des codes </h1>

<p> <?php echo $message; ?> </p>
  
</body>
</html>     