<?php 
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis','root', '');
$pdoStat = $objetPdo -> prepare ('UPDATE code_projet set  identifiant_projet = :identifiant_projet, identifiant_code = :identifiant_code, montant_code_projet = :montant_code_projet
                                  WHERE id=:num LIMIT 1');

$pdoStat->bindValue(':num', $_POST['numCodeProjet'], PDO::PARAM_INT);
$pdoStat->bindValue(':identifiant_projet', $_POST['identifiant_projet'], PDO:: PARAM_STR);
$pdoStat->bindValue(':identifiant_code', $_POST['identifiant_code'], PDO:: PARAM_STR);
$pdoStat->bindValue(':montant_code_projet', $_POST['montant_code_projet'], PDO:: PARAM_STR);
$executeIsOk = $pdoStat->execute();
 


if($executeIsOk){
    $message = 'le  code projet a été modifié';
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