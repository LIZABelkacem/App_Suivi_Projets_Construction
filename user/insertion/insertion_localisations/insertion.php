<?php
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');

$pdoStat = $objetPdo -> prepare ('INSERT INTO locations VALUES ( NULL, :name ,  :address , :lat , :lon  , :description)');


$pdoStat->bindValue(':address', $_POST['address'], PDO:: PARAM_STR);
$pdoStat->bindValue(':name', $_POST['name'], PDO:: PARAM_STR);
$pdoStat->bindValue(':lat', $_POST['lat'], PDO:: PARAM_STR);
$pdoStat->bindValue(':lon', $_POST['lon'], PDO:: PARAM_STR);
$pdoStat->bindValue(':description', $_POST['description'], PDO:: PARAM_STR);

$executeIsOk = $pdoStat->execute();
 
if($executeIsOk){
    $message = 'la localisation a été ajoutée';
}
else{
  $message = "echec de l'ajout de la localisation";
}
?>

<html>
<head>
<meta charset="utf-8">

<title> document </title>

</head>
<body>
<h1> insertion des localisations </h1>

<p> <?php echo $message; ?> </p>
  
</body>
</html>     