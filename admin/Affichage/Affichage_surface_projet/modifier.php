<?php 
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis','root', '');
$pdoStat = $objetPdo -> prepare ('UPDATE surface_projet set  identifiant_projet = :identifiant_projet, identifiant_surface = :identifiant_surface, montant_surface_projet = :montant_surface_projet
                                  WHERE id=:num LIMIT 1');

$pdoStat->bindValue(':num', $_POST['numSurfaceProjet'], PDO::PARAM_INT);
$pdoStat->bindValue(':identifiant_projet', $_POST['identifiant_projet'], PDO:: PARAM_STR);
$pdoStat->bindValue(':identifiant_surface', $_POST['identifiant_surface'], PDO:: PARAM_STR);
$pdoStat->bindValue(':montant_surface', $_POST['montant_surface'], PDO:: PARAM_STR);
$executeIsOk = $pdoStat->execute();
 


if($executeIsOk){
    $message = 'la surface  projet a été modifié';
}
else{
  $message = "echec de la modification de la surface ";
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