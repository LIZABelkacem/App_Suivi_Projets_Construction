<?php 
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis','root', '');
$pdoStat = $objetPdo -> prepare ('UPDATE locations set  name = :name , address = :address , lat = :lat , lon = :lon , description = :description
                                  WHERE id=:num LIMIT 1');

$pdoStat->bindValue(':num', $_POST['numLoc'], PDO::PARAM_INT);
$pdoStat->bindValue(':name', $_POST['name'], PDO:: PARAM_STR);
$pdoStat->bindValue(':address', $_POST['address'], PDO:: PARAM_STR);
$pdoStat->bindValue(':lat', $_POST['lat'], PDO:: PARAM_STR);
$pdoStat->bindValue(':lon', $_POST['lon'], PDO:: PARAM_STR);
$pdoStat->bindValue(':description', $_POST['description'], PDO:: PARAM_STR);

$executeIsOk = $pdoStat->execute();
 


if($executeIsOk){
    $message = 'la localisation  a été modifiée' ;
}
else{
  $message = "echec de la modification de la localisation";
}
?>
<html>
<head>
<meta charset="utf-8">
<title> modification : résultat </title>

</head>
<body>
<h1> résultat modification </h1>
 
<p> <?= $message ?>  </p> 
</body>
</html> 