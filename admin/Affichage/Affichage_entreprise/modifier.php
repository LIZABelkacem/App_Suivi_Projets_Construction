<?php 
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis','root', '');
$pdoStat = $objetPdo -> prepare ('UPDATE entreprise set  identifiant_entreprise = :identifiant_entreprise, nom_entreprise = :nom_entreprise
            
                                  WHERE id=:num LIMIT 1');

$pdoStat->bindValue(':num', $_POST['numEntreprise'], PDO::PARAM_INT);
$pdoStat->bindValue(':identifiant_entreprise', $_POST['identifiant_entreprise'], PDO:: PARAM_STR);
$pdoStat->bindValue(':nom_entreprise', $_POST['nom_entreprise'], PDO:: PARAM_STR);
$executeIsOk = $pdoStat->execute();
 


if($executeIsOk){
    $message = 'l entreprise a été modifiée';
}
else{
  $message = "echec de la modification de l entreprise";
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