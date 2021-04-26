<?php 
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis','root', '');
$pdoStat = $objetPdo -> prepare ('UPDATE sous_code_projet set  identifiant_projet = :identifiant_projet, identifiant_sous_code = :identifiant_sous_code, montant = :montant
                                  WHERE id=:num LIMIT 1');

$pdoStat->bindValue(':num', $_POST['numSousCodeProjet'], PDO::PARAM_INT);
$pdoStat->bindValue(':identifiant_projet', $_POST['identifiant_projet'], PDO:: PARAM_STR);
$pdoStat->bindValue(':identifiant_sous_code', $_POST['identifiant_sous_code'], PDO:: PARAM_STR);
$pdoStat->bindValue(':montant', $_POST['montant'], PDO:: PARAM_STR);
$executeIsOk = $pdoStat->execute();
 


if($executeIsOk){
    $message = 'le sous code  projet a été modifié';
}
else{
  $message = "echec de la modification du sous code projet ";
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